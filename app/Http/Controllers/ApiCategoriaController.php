<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class ApiCategoriaController extends Controller
{
    public function index()
    { return response()->json(Categoria::all(), 200);}
    public function store(Request $request)
    {   $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',]);
        $categoria = Categoria::create($request->all());
        return response()->json($categoria, 201);}
    public function show($id)
    { $categoria = Categoria::find($id);
        if (!$categoria) {
            return response()->json(['error' => 'Categoría no encontrada'], 404);
        }
        return response()->json($categoria, 200);}
    public function update(Request $request, $id)
    {$categoria = Categoria::find($id);
        if (!$categoria) {
            return response()->json(['error' => 'Categoría no encontrada'], 404);   }
        $categoria->update($request->all());
        return response()->json($categoria, 200);}
    public function destroy($id)
    {   $categoria = Categoria::find($id);
        if (!$categoria) {
            return response()->json(['error' => 'Categoría no encontrada'], 404);}
        $categoria->delete();
        return response()->json(['mensaje' => 'Categoría eliminada correctamente'], 200);
    }
}

