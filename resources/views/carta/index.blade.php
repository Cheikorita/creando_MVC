{{-- resources/views/carta/index.blade.php --}}

@extends('layouts.app')

@section('titulo', 'carta')

@section('contenido')

<h1>Carta</h1>
<ul>
@foreach ($productos as $producto)
    <li> <a href="{{ route('vista_producto', ['codigo' => $producto['codigo'] ]) }}"> <!-- Llamo al generador de rutas-->
        {{ $producto['codigo'] }}
        -{{ $producto['nombre'] }}
        -{{ number_format($producto['precio'], 2, ",", "") }} €
        </a>
    </li>
@endforeach
</ul>

@endsection
