<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller
{
    /**
     * Display a listing of the products with pagination and filters.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $category = $request->input('category');
        $search = $request->input('search');
        $supplierId = $request->input('supplier_id');
        $status = $request->input('status');

        $query = Product::with('supplier');

        if ($category) {
            $query->where('category', $category);
        }

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        if ($supplierId) {
            $query->where('supplier_id', $supplierId);
        }

        if ($status) {
            $query->where('status', $status);
        }

        $products = $query->paginate($perPage);

        // Transform the products collection to rename image to imageUrl
        $transformedProducts = $products->getCollection()->map(function ($product) {
            $productArray = $product->toArray();
            if (isset($productArray['image'])) {
                $productArray['imageUrl'] = $productArray['image'];
                unset($productArray['image']);
            }
            return $productArray;
        });

        // Set the transformed collection back to the paginator
        $products->setCollection($transformedProducts);

        return response()->json([
            'success' => true,
            'data' => $products->items(),
            'pagination' => [
                'total' => $products->total(),
                'per_page' => $products->perPage(),
                'current_page' => $products->currentPage(),
                'last_page' => $products->lastPage(),
            ]
        ]);
    }

    /**
     * Store a newly created product in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        if ($request->has('imageUrl')) {
            $request->merge(['image' => $request->input('imageUrl')]);
        }
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'unit' => 'required|string|max:50',
            'category' => 'required|string|max:100',
            'stock' => 'required|integer|min:0',
            'supplier_id' => 'required|exists:suppliers,id',
            'nutritional_info' => 'nullable|array',
            'origin' => 'nullable|string|max:100',
            'image' => 'nullable|url|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'error' => 'Validation Error',
                'message' => $validator->errors()
            ], 422);
        }

        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'unit' => $request->unit,
            'category' => $request->category,
            'stock' => $request->stock,
            'status' => $request->stock > 0 ? Product::STATUS_ACTIVE : Product::STATUS_OUT_OF_STOCK,
            'supplier_id' => $request->supplier_id,
            'nutritional_info' => $request->nutritional_info,
            'origin' => $request->origin,
            'image' => $request->image,
        ]);

        return response()->json([
            'success' => true,
            'data' => $product->load('supplier'),
            'message' => 'Producto creado correctamente.'
        ], 201);
    }

    /**
     * Display the specified product.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $product = Product::with('supplier')->find($id);

        if (!$product) {
            return response()->json([
                'success' => false,
                'message' => 'Producto no encontrado.'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $product
        ]);
    }

    /**
     * Update the specified product in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'success' => false,
                'message' => 'Producto no encontrado.'
            ], 404);
        }
        if ($request->has('imageUrl')) {
            $request->merge(['image' => $request->input('imageUrl')]);
        }
        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|string|max:255',
            'description' => 'nullable|string',
            'price' => 'sometimes|numeric|min:0',
            'unit' => 'sometimes|string|max:50',
            'category' => 'sometimes|string|max:100',
            'stock' => 'sometimes|integer|min:0',
            'status' => 'sometimes|in:active,inactive,out_of_stock',
            'supplier_id' => 'sometimes|exists:suppliers,id',
            'nutritional_info' => 'nullable|array',
            'origin' => 'nullable|string|max:100',
            'image' => 'nullable|url|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'error' => 'Validation Error',
                'message' => $validator->errors()
            ], 422);
        }

        $data = $request->all();

        $product->update($data);

        return response()->json([
            'success' => true,
            'data' => $product->load('supplier'),
            'message' => 'Producto actualizado correctamente.'
        ]);
    }

    /**
     * Remove the specified product from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'success' => false,
                'message' => 'Producto no encontrado.'
            ], 404);
        }

        // Check if product has related orders
        if ($product->orderItems()->exists()) {
            return response()->json([
                'success' => false,
                'message' => 'No se puede eliminar el producto porque tiene pedidos asociados.'
            ], 400);
        }

        $product->delete();

        return response()->json([
            'success' => true,
            'message' => 'Producto eliminado correctamente.'
        ]);
    }

    /**
     * Get all available product categories.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function categories()
    {
        $categories = Product::select('category')
            ->distinct()
            ->orderBy('category')
            ->pluck('category');

        return response()->json([
            'success' => true,
            'data' => $categories
        ]);
    }

    /**
     * Update product stock.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateStock(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'success' => false,
                'message' => 'Producto no encontrado.'
            ], 404);
        }

        $request->validate([
            'stock' => 'required|integer|min:0',
        ]);

        $product->updateStock($request->stock);

        return response()->json([
            'success' => true,
            'data' => $product,
            'message' => 'Stock actualizado correctamente.'
        ]);
    }

    /**
     * Get products with low stock.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function lowStock(Request $request)
    {
        $threshold = $request->input('threshold', 10);

        $products = Product::where('stock', '<=', $threshold)
            ->orderBy('stock')
            ->get();

        return response()->json([
            'success' => true,
            'data' => $products,
            'meta' => [
                'threshold' => (int)$threshold,
                'count' => $products->count()
            ]
        ]);
    }
}
