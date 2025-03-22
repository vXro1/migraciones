<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonasController extends Controller
{
    public function listar()
    {
        // Crear un array de objetos Persona
        $personas = [
            (object) ['nombre' => 'Juan Pérez', 'edad' => 20, 'rol' => 'Estudiante'],
            (object) ['nombre' => 'María Gómez', 'edad' => 35, 'rol' => 'Docente'],
            (object) ['nombre' => 'Carlos Rodríguez', 'edad' => 40, 'rol' => 'Coordinador'],
        ];

        // Pasar la variable $personas a la vista
        return view('personas', compact('personas'));
    }
}
