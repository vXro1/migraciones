<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\PersonasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bienvenido', function () {
    return view('bienvenido');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/persona', [PersonaController::class, 'mostrar']);

Route::get('/colores', [ColorController::class, 'index']);

Route::get('/personas', [PersonasController::class, 'listar']);
