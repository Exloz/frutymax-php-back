<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        return response()->json($categorias);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $categoria = Categoria::create($request->all());
        return response()->json($categoria, 201);
    }

    public function show($id)
    {
        $categoria = Categoria::find($id);
        if (is_null($categoria)) {
            return response()->json(['message' => 'Categoría no encontrada'], 404);
        }
        return response()->json($categoria);
    }

    public function update(Request $request, $id)
    {
        $categoria = Categoria::find($id);
        if (is_null($categoria)) {
            return response()->json(['message' => 'Categoría no encontrada'], 404);
        }

        $validator = Validator::make($request->all(), [
            'nombre' => 'sometimes|required|string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $categoria->update($request->all());
        return response()->json($categoria);
    }

    public function destroy($id)
    {
        $categoria = Categoria::find($id);
        if (is_null($categoria)) {
            return response()->json(['message' => 'Categoría no encontrada'], 404);
        }

        // Verificar si hay productos asociados
        if ($categoria->productos()->count() > 0) {
            return response()->json([
                'message' => 'No se puede eliminar la categoría porque tiene productos asociados',
            ], 400);
        }

        $categoria->delete();
        return response()->json(['message' => 'Categoría eliminada correctamente']);
    }
}
