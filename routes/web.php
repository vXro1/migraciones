<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\Producto;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ProductoController;
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


Route::get('/personas', [PersonasController::class, 'listar']);

Route::get('/productos', [ProductoController::class,'index'])->name('productos.index');


Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');
Route::get('/productos/create', [ProductoController::class,'create'])->name('productos.create');
Route::post('/productos', [ProductoController::class,'store'])->name('productos.store');
