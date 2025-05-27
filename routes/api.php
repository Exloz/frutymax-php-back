<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CategoriaController;
use App\Http\Controllers\API\ProductoController;
use App\Http\Controllers\API\ProveedorController;
use App\Http\Controllers\API\CompraController;
use App\Http\Controllers\API\VentaController;

// Ruta de estado de la API
Route::get('/status', function () {
    return response()->json([
        'message' => 'API funcionando correctamente 🚀',
        'timestamp' => now(),
    ]);
});

// Rutas para Categorías (CRUD completo)
Route::apiResource('categorias', CategoriaController::class);

// Rutas para Productos (CRUD completo)
Route::apiResource('productos', ProductoController::class);

// Rutas para Proveedores (CRUD completo)
Route::apiResource('proveedores', ProveedorController::class);

// Rutas para Compras (CRUD completo)
Route::apiResource('compras', CompraController::class);

// Rutas para Ventas (CRUD completo)
Route::apiResource('ventas', VentaController::class);
