<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductoController;
use App\Http\Controllers\API\ProveedorController;
use App\Http\Controllers\API\OrderController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\AuthController;

// Authentication Routes
Route::prefix('auth')->group(function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api');
    Route::get('/profile', [AuthController::class, 'profile'])->middleware('auth:api');
    Route::put('/profile', [AuthController::class, 'updateProfile'])->middleware('auth:api');
    Route::get('/verify', [AuthController::class, 'verifyToken'])->middleware('auth:api');
    Route::post('/change-password', [AuthController::class, 'changePassword'])->middleware('auth:api');
});

// API Status
Route::get('/status', function () {
    return response()->json([
        'success' => true,
        'message' => 'API funcionando correctamente 🚀',
        'data' => [
            'timestamp' => now(),
            'version' => '1.0.0'
        ]
    ]);
});

// Product Routes
Route::prefix('products')->group(function () {
    Route::get('/', [ProductoController::class, 'index']);
    Route::get('/{id}', [ProductoController::class, 'show']);
    Route::post('/', [ProductoController::class, 'store'])->middleware('auth:api');
    Route::put('/{id}', [ProductoController::class, 'update'])->middleware('auth:api');
    Route::delete('/{id}', [ProductoController::class, 'destroy'])->middleware('auth:api');
    Route::post('/{id}/image', [ProductoController::class, 'uploadImage'])->middleware('auth:api');
    Route::get('/categories', [ProductoController::class, 'categories']);
    Route::patch('/{id}/stock', [ProductoController::class, 'updateStock'])->middleware('auth:api');
    Route::get('/low-stock', [ProductoController::class, 'lowStock'])->middleware('auth:api');
});

// Supplier Routes
Route::prefix('suppliers')->group(function () {
    Route::get('/', [ProveedorController::class, 'index']);
    Route::get('/{id}', [ProveedorController::class, 'show']);
    Route::post('/', [ProveedorController::class, 'store'])->middleware('auth:api');
    Route::put('/{id}', [ProveedorController::class, 'update'])->middleware('auth:api');
    Route::delete('/{id}', [ProveedorController::class, 'destroy'])->middleware('auth:api');
    Route::get('/{id}/products', [ProveedorController::class, 'products']);
    Route::patch('/{id}/toggle-status', [ProveedorController::class, 'toggleStatus'])->middleware('auth:api');
});

// Order Routes
Route::prefix('orders')->group(function () {
    Route::get('/', [OrderController::class, 'index'])->middleware('auth:api');
    Route::get('/{id}', [OrderController::class, 'show'])->middleware('auth:api');
    Route::post('/', [OrderController::class, 'store'])->middleware('auth:api');
    Route::patch('/{id}/status', [OrderController::class, 'updateStatus'])->middleware('auth:api');
    Route::get('/my-orders', [OrderController::class, 'myOrders'])->middleware('auth:api');
    Route::patch('/{id}/cancel', [OrderController::class, 'cancel'])->middleware('auth:api');
    Route::get('/stats', [OrderController::class, 'stats'])->middleware('auth:api');
});

// User Management (Admin only)
Route::prefix('users')->middleware(['auth:api', 'role:admin'])->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::get('/{id}', [UserController::class, 'show']);
    Route::put('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);
    Route::patch('/{id}/role', [UserController::class, 'changeRole']);
});
