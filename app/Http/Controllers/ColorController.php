<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColorController extends Controller {
    public function index() {
        $colores = ["Rojo", "Verde", "Azul"];
        return view('colores', compact('colores'));
    }
}
