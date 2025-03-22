<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller {
    public function mostrar() {
        $persona1 = new Persona("Carlos", 25);
        return view('persona', ['mensaje' => $persona1->presentarse()]);
    }
}
