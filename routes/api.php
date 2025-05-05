<?php

use App\Http\Controllers\ApiCategoriaController;
use App\Http\Controllers\ApiProductoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('productos', ApiProductoController::class);

Route::get('/categorias', [ApiCategoriaController::class, 'index']);
Route::post('/categorias', [ApiCategoriaController::class, 'store']);
Route::get('/categorias/{id}', [ApiCategoriaController::class, 'show']);
Route::put('/categorias/{id}', [ApiCategoriaController::class, 'update']);
Route::delete('/categorias/{id}', [ApiCategoriaController::class, 'destroy']);
