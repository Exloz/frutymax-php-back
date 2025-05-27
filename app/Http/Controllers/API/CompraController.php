<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Compra;
use App\Models\DetalleCompra;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CompraController extends Controller
{
    public function index()
    {
        $compras = Compra::with(['proveedor', 'detalleCompras.producto'])->get();
        return response()->json($compras);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fecha' => 'required|date',
            'proveedor_id' => 'required|exists:proveedores,id',
            'detalles' => 'required|array|min:1',
            'detalles.*.producto_id' => 'required|exists:productos,id',
            'detalles.*.cantidad' => 'required|integer|min:1',
            'detalles.*.precio_unitario' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        return DB::transaction(function () use ($request) {
            // Calcular el total de la compra
            $total = collect($request->detalles)->sum(function ($detalle) {
                return $detalle['cantidad'] * $detalle['precio_unitario'];
            });

            // Crear la compra
            $compra = Compra::create([
                'fecha' => $request->fecha,
                'total' => $total,
                'proveedor_id' => $request->proveedor_id,
            ]);

            // Crear los detalles de la compra y actualizar el stock
            foreach ($request->detalles as $detalle) {
                $producto = Producto::find($detalle['producto_id']);
                
                $compra->detalleCompras()->create([
                    'producto_id' => $detalle['producto_id'],
                    'cantidad' => $detalle['cantidad'],
                    'precio_unitario' => $detalle['precio_unitario'],
                ]);

                // Actualizar el stock del producto
                $producto->increment('stock', $detalle['cantidad']);
            }

            return response()->json($compra->load(['proveedor', 'detalleCompras.producto']), 201);
        });
    }

    public function show($id)
    {
        $compra = Compra::with(['proveedor', 'detalleCompras.producto'])->find($id);
        if (is_null($compra)) {
            return response()->json(['message' => 'Compra no encontrada'], 404);
        }
        return response()->json($compra);
    }

    public function update(Request $request, $id)
    {
        $compra = Compra::find($id);
        if (is_null($compra)) {
            return response()->json(['message' => 'Compra no encontrada'], 404);
        }

        $validator = Validator::make($request->all(), [
            'fecha' => 'sometimes|required|date',
            'proveedor_id' => 'sometimes|required|exists:proveedores,id',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $compra->update($request->only(['fecha', 'proveedor_id']));
        return response()->json($compra->load(['proveedor', 'detalleCompras.producto']));
    }

    public function destroy($id)
    {
        $compra = Compra::with('detalleCompras')->find($id);
        if (is_null($compra)) {
            return response()->json(['message' => 'Compra no encontrada'], 404);
        }

        return DB::transaction(function () use ($compra) {
            // Revertir el stock de los productos
            foreach ($compra->detalleCompras as $detalle) {
                $producto = Producto::find($detalle->producto_id);
                if ($producto->stock >= $detalle->cantidad) {
                    $producto->decrement('stock', $detalle->cantidad);
                } else {
                    // Si no hay suficiente stock, establecerlo en 0
                    $producto->stock = 0;
                    $producto->save();
                }
            }

            // Eliminar la compra y sus detalles (se eliminarán en cascada si está configurado así en la base de datos)
            $compra->delete();

            return response()->json(['message' => 'Compra eliminada correctamente']);
        });
    }
}
