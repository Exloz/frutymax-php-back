<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Venta;
use App\Models\DetalleVenta;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class VentaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index()
    {
        $ventas = Venta::with(['user', 'detalleVentas.producto'])->get();
        return response()->json($ventas);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fecha' => 'required|date',
            'detalles' => 'required|array|min:1',
            'detalles.*.producto_id' => 'required|exists:productos,id',
            'detalles.*.cantidad' => 'required|integer|min:1',
            'detalles.*.precio_unitario' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // Validar que haya suficiente stock para todos los productos
        $erroresStock = [];
        foreach ($request->detalles as $index => $detalle) {
            $producto = Producto::find($detalle['producto_id']);
            if ($producto->stock < $detalle['cantidad']) {
                $erroresStock[] = [
                    'producto' => $producto->nombre,
                    'stock_disponible' => $producto->stock,
                    'cantidad_solicitada' => $detalle['cantidad'],
                ];
            }
        }

        if (!empty($erroresStock)) {
            return response()->json([
                'message' => 'No hay suficiente stock para uno o más productos',
                'errores' => $erroresStock,
            ], 400);
        }

        return DB::transaction(function () use ($request) {
            // Calcular el total de la venta
            $total = collect($request->detalles)->sum(function ($detalle) {
                return $detalle['cantidad'] * $detalle['precio_unitario'];
            });

            // Crear la venta
            $venta = Venta::create([
                'fecha' => $request->fecha,
                'total' => $total,
                'user_id' => Auth::id(),
            ]);

            // Crear los detalles de la venta y actualizar el stock
            foreach ($request->detalles as $detalle) {
                $producto = Producto::find($detalle['producto_id']);
                
                $venta->detalleVentas()->create([
                    'producto_id' => $detalle['producto_id'],
                    'cantidad' => $detalle['cantidad'],
                    'precio_unitario' => $detalle['precio_unitario'],
                ]);

                // Actualizar el stock del producto
                $producto->decrement('stock', $detalle['cantidad']);
            }

            return response()->json($venta->load(['user', 'detalleVentas.producto']), 201);
        });
    }

    public function show($id)
    {
        $venta = Venta::with(['user', 'detalleVentas.producto'])->find($id);
        if (is_null($venta)) {
            return response()->json(['message' => 'Venta no encontrada'], 404);
        }
        return response()->json($venta);
    }

    public function update(Request $request, $id)
    {
        $venta = Venta::find($id);
        if (is_null($venta)) {
            return response()->json(['message' => 'Venta no encontrada'], 404);
        }

        $validator = Validator::make($request->all(), [
            'fecha' => 'sometimes|required|date',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $venta->update($request->only(['fecha']));
        return response()->json($venta->load(['user', 'detalleVentas.producto']));
    }

    public function destroy($id)
    {
        $venta = Venta::with('detalleVentas')->find($id);
        if (is_null($venta)) {
            return response()->json(['message' => 'Venta no encontrada'], 404);
        }

        return DB::transaction(function () use ($venta) {
            // Revertir el stock de los productos
            foreach ($venta->detalleVentas as $detalle) {
                $producto = Producto::find($detalle->producto_id);
                $producto->increment('stock', $detalle->cantidad);
            }

            // Eliminar la venta y sus detalles (se eliminarán en cascada si está configurado así en la base de datos)
            $venta->delete();

            return response()->json(['message' => 'Venta eliminada correctamente']);
        });
    }
}
