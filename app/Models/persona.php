<?php

namespace App\Models;

class Persona {
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function presentarse() {
        return "Hola, soy {$this->nombre} y tengo {$this->edad} años.";
    }
}
