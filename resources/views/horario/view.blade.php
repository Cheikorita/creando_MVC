{{-- resources/views/horario/view.blade.php --}}

@extends('layouts.app')

@section('titulo', 'Horario Diario')

@section('contenido')
    <h1>Horario - {{ $dia['dia']}}</h1>
    <p>{{ $dia['frase'] }}</p>
    <ul>
        @foreach ($trabajadores as $trabajador)
        <li>{{ $trabajador }} </li>
        @endforeach
    </ul>
@endsection
