<?php

use Illuminate\Support\Facades\Route;

Route::get('/status', function () {
    return response()->json([
        'message' => 'API funcionando correctamente 🚀',
        'timestamp' => now(),
    ]);
});

Route::post('/register', 'App\Http\Controllers\AuthController@register');

