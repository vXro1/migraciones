<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\ApiCategoriaController;
use App\Http\Controllers\ApiProductoController;

// Ruta para obtener el usuario autenticado (requiere token JWT)
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Rutas públicas
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Rutas protegidas con JWT
Route::middleware('auth:api')->group(function () {
    // CRUD de productos
    Route::apiResource('productos', ApiProductoController::class);

    // CRUD de categorías
    Route::get('/categorias', [ApiCategoriaController::class, 'index']);
    Route::post('/categorias', [ApiCategoriaController::class, 'store']);
    Route::get('/categorias/{id}', [ApiCategoriaController::class, 'show']);
    Route::put('/categorias/{id}', [ApiCategoriaController::class, 'update']);
    Route::delete('/categorias/{id}', [ApiCategoriaController::class, 'destroy']);
});
