@extends('layout')

@section('titulo', 'Colores')

@section('contenido')
    <h2>Lista de Colores</h2>
    <ul>
        @foreach ($colores as $color)
            <li>{{ $color }}</li>
        @endforeach
    </ul>
@endsection
