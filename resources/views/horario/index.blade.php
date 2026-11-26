{{-- resources/views/horario/index.blade.php --}}

@extends('layouts.app')

@section('titulo', 'carta')

@section('contenido')
    <h1>Horario</h1>
    <ul>
    @foreach ($horario as $dia)
        <li> <a href="{{ route('vista_horario_personal', ['dia' => $dia['dia'] ]) }}"> <!-- Llamo al generador de rutas-->
            {{ $dia["dia"] }}
            -{{ $dia["frase"] }}
            </a>
        </li>
    @endforeach
    </ul>
@endsection
