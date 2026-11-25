{{-- resources/views/carta/index.blade.php --}}

@extends('layouts.app')

@section('titulo', 'producto')

@section('contenido')
    <h1>Producto - {{ $producto['nombre']}}</h1>
    <ul>
        <li>{{ $producto['codigo'] }} </li>
        <li>{{ $producto['nombre'] }}</li>
        <li>{{ number_format($producto['precio'], 2, ",", "") }} €</li>
    </ul>
@endsection
