<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::with('categoria')->get();
        return response()->json($productos);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $producto = Producto::create($request->all());
        return response()->json($producto, 201);
    }

    public function show($id)
    {
        $producto = Producto::with('categoria')->find($id);
        if (is_null($producto)) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }
        return response()->json($producto);
    }

    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);
        if (is_null($producto)) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }

        $validator = Validator::make($request->all(), [
            'nombre' => 'sometimes|required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'sometimes|required|numeric|min:0',
            'stock' => 'sometimes|required|integer|min:0',
            'categoria_id' => 'sometimes|required|exists:categorias,id',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $producto->update($request->all());
        return response()->json($producto);
    }

    public function destroy($id)
    {
        $producto = Producto::find($id);
        if (is_null($producto)) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }

        // Verificar si hay registros relacionados
        if ($producto->detalleCompras()->count() > 0 || $producto->detalleVentas()->count() > 0) {
            return response()->json([
                'message' => 'No se puede eliminar el producto porque tiene registros relacionados',
            ], 400);
        }

        $producto->delete();
        return response()->json(['message' => 'Producto eliminado correctamente']);
    }
}
