<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProveedorController extends Controller
{
    public function index()
    {
        $proveedores = Proveedor::all();
        return response()->json($proveedores);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
            'contacto' => 'nullable|string|max:255',
            'telefono' => 'nullable|string|max:20',
            'direccion' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $proveedor = Proveedor::create($request->all());
        return response()->json($proveedor, 201);
    }

    public function show($id)
    {
        $proveedor = Proveedor::find($id);
        if (is_null($proveedor)) {
            return response()->json(['message' => 'Proveedor no encontrado'], 404);
        }
        return response()->json($proveedor);
    }

    public function update(Request $request, $id)
    {
        $proveedor = Proveedor::find($id);
        if (is_null($proveedor)) {
            return response()->json(['message' => 'Proveedor no encontrado'], 404);
        }

        $validator = Validator::make($request->all(), [
            'nombre' => 'sometimes|required|string|max:255',
            'contacto' => 'nullable|string|max:255',
            'telefono' => 'nullable|string|max:20',
            'direccion' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $proveedor->update($request->all());
        return response()->json($proveedor);
    }

    public function destroy($id)
    {
        $proveedor = Proveedor::find($id);
        if (is_null($proveedor)) {
            return response()->json(['message' => 'Proveedor no encontrado'], 404);
        }

        // Verificar si hay compras asociadas
        if ($proveedor->compras()->count() > 0) {
            return response()->json([
                'message' => 'No se puede eliminar el proveedor porque tiene compras asociadas',
            ], 400);
        }

        $proveedor->delete();
        return response()->json(['message' => 'Proveedor eliminado correctamente']);
    }
}
