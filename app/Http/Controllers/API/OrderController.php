<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the orders with pagination.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $status = $request->input('status');
        $userId = $request->input('user_id');
        $dateFrom = $request->input('date_from');
        $dateTo = $request->input('date_to');

        $query = Order::with(['user', 'items.product']);

        if ($status) {
            $query->where('status', $status);
        }

        if ($userId) {
            $query->where('user_id', $userId);
        }

        if ($dateFrom) {
            $query->whereDate('created_at', '>=', $dateFrom);
        }

        if ($dateTo) {
            $query->whereDate('created_at', '<=', $dateTo);
        }

        $orders = $query->paginate($perPage);

        return response()->json([
            'success' => true,
            'data' => $orders->items(),
            'pagination' => [
                'total' => $orders->total(),
                'per_page' => $orders->perPage(),
                'current_page' => $orders->currentPage(),
                'last_page' => $orders->lastPage(),
            ]
        ]);
    }

    /**
     * Display the specified order.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $order = Order::with(['user', 'items.product'])->findOrFail($id);

        // Only allow the user who created the order or an admin to view it
        if (Auth::id() !== $order->user_id && !Auth::user()->isAdmin()) {
            return response()->json([
                'success' => false,
                'message' => 'No autorizado para ver este pedido.'
            ], 403);
        }

        return response()->json([
            'success' => true,
            'data' => $order
        ]);
    }

    /**
     * Store a newly created order in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'items' => 'required|array|min:1',
            'items.*.product_id' => 'required|exists:products,id',
            'items.*.quantity' => 'required|integer|min:1',
            'shipping_address' => 'required|string|max:500',
            'payment_method' => 'required|string|in:credit_card,debit_card,cash,transfer',
        ]);

        return DB::transaction(function () use ($request) {
            $order = new Order([
                'user_id' => Auth::id(),
                'status' => Order::STATUS_PENDING,
                'shipping_address' => $request->shipping_address,
                'payment_method' => $request->payment_method,
                'payment_status' => Order::PAYMENT_PENDING,
            ]);

            $order->save();
            $total = 0;

            foreach ($request->items as $itemData) {
                $product = Product::findOrFail($itemData['product_id']);
                
                // Check if there's enough stock
                if ($product->stock < $itemData['quantity']) {
                    throw new \Exception("No hay suficiente stock para el producto: {$product->name}");
                }

                $orderItem = new OrderItem([
                    'product_id' => $product->id,
                    'quantity' => $itemData['quantity'],
                    'price' => $product->price,
                    'subtotal' => $product->price * $itemData['quantity'],
                ]);

                $order->items()->save($orderItem);
                $total += $orderItem->subtotal;

                // Update product stock
                $product->decrement('stock', $itemData['quantity']);
            }


            // Update order total
            $order->total = $total;
            $order->save();

            return response()->json([
                'success' => true,
                'data' => $order->load('items.product'),
                'message' => 'Pedido creado correctamente.'
            ], 201);
        });
    }

    /**
     * Update the specified order status.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,processing,shipped,delivered,cancelled',
        ]);

        $order = Order::findOrFail($id);
        $order->status = $request->status;
        $order->save();

        return response()->json([
            'success' => true,
            'data' => $order,
            'message' => 'Estado del pedido actualizado correctamente.'
        ]);
    }

    /**
     * Get the authenticated user's orders.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function myOrders(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $status = $request->input('status');

        $query = Order::with('items.product')
            ->where('user_id', Auth::id());

        if ($status) {
            $query->where('status', $status);
        }

        $orders = $query->latest()
            ->paginate($perPage);

        return response()->json([
            'success' => true,
            'data' => $orders->items(),
            'pagination' => [
                'total' => $orders->total(),
                'per_page' => $orders->perPage(),
                'current_page' => $orders->currentPage(),
                'last_page' => $orders->lastPage(),
            ]
        ]);
    }

    /**
     * Cancel the specified order.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function cancel($id)
    {
        return DB::transaction(function () use ($id) {
            $order = Order::with('items.product')
                ->where('user_id', Auth::id())
                ->findOrFail($id);

            if (!in_array($order->status, [Order::STATUS_PENDING, Order::STATUS_PROCESSING])) {
                return response()->json([
                    'success' => false,
                    'message' => 'Solo se pueden cancelar pedidos en estado pendiente o en proceso.'
                ], 400);
            }

            // Return products to stock
            foreach ($order->items as $item) {
                $item->product->increment('stock', $item->quantity);
            }

            $order->status = Order::STATUS_CANCELLED;
            $order->save();

            return response()->json([
                'success' => true,
                'message' => 'Pedido cancelado correctamente.'
            ]);
        });
    }

    /**
     * Get order statistics.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function stats()
    {
        $user = Auth::user();
        
        $query = Order::query();
        
        // If not admin, only show user's stats
        if (!$user->isAdmin()) {
            $query->where('user_id', $user->id);
        }
        
        $stats = [
            'total_orders' => (clone $query)->count(),
            'pending_orders' => (clone $query)->where('status', Order::STATUS_PENDING)->count(),
            'processing_orders' => (clone $query)->where('status', Order::STATUS_PROCESSING)->count(),
            'shipped_orders' => (clone $query)->where('status', Order::STATUS_SHIPPED)->count(),
            'delivered_orders' => (clone $query)->where('status', Order::STATUS_DELIVERED)->count(),
            'cancelled_orders' => (clone $query)->where('status', Order::STATUS_CANCELLED)->count(),
            'total_revenue' => (clone $query)->where('payment_status', Order::PAYMENT_PAID)->sum('total'),
        ];

        return response()->json([
            'success' => true,
            'data' => $stats
        ]);
    }
}
