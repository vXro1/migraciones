<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table ='categorias';
    protected $primaryKey='id';
    //DEFINIR LOS ATRIBUTOS DE LA TABLA
    protected $fillable = [
            'nombre',
            'descripcion',
    ];
}
