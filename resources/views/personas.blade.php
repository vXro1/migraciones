@extends('layout')

@section('titulo', 'Lista de Personas')

@section('contenido')
    <h2>Lista de Personas</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Rol</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personas as $persona)
                <tr>
                    <td>{{ $persona->nombre }}</td>
                    <td>{{ $persona->edad }}</td>
                    <td>{{ $persona->rol }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
