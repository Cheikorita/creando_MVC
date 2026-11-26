<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HorarioController extends Controller
{
    // Queremos que salga el horario
    public function index() {
        return view('horario.index', ['horario' => $this->horario()]);
    }


    // Entra el parámetro $dia es el parametro que entra, que uso cuando llamo el generador de ruta en la vista <li> <a href="{{ route('vista_horario_personal', ['dia' => $dia['dia'] ]) }}">
    public function dia($dia) {
        $horario = $this->horario();
        $resul = [];

        foreach ( $horario as $d) {
            if ( $d['dia']  === $dia ) {
            $resul = $d;
            break;
            }
        }

        $todos = $this->trabajadores();
        $trabajador_dia = $resul['dia'];
        $t = $todos[$trabajador_dia];
        // dd($t);

        if ( !empty($resul)) {
            return view('horario.view', ['dia' => $resul,'trabajadores' => $t]);
        }

        abort(404, 'Producto no hallado');
    }

    private function horario() {
        return [
            ["dia" => "Lunes",      "frase" => "Empieza con calma, pero empieza."],
            ["dia" => "Martes",     "frase" => "Un paso pequeño hoy es un avance gigante mañana."],
            ["dia" => "Miercoles",  "frase" => "Mitad de semana: sigue con el buen ritmo."],
            ["dia" => "Jueves",     "frase" => "Que la constancia sea tu mejor hábito."],
            ["dia" => "Viernes",    "frase" => "Cierra la semana con orgullo por lo logrado."],
            ["dia" => "Sabado",     "frase" => "Hoy toca desconectar para volver a conectar."],
            ["dia" => "Domingo",    "frase" => "Recarga energías; lo mejor está por venir."],
        ];
    }

    private function trabajadores() {
        return [
            "Lunes"     => ["Erlantz",  "Eneko"],
            "Martes"    => ["Erlantz",  "Rocio"],
            "Miercoles" => ["Erlantz",  "Rocio"],
            "Jueves"    => ["Rocio",    "Eneko"],
            "Viernes"   => ["Rocio",    "Eneko"],
            "Sabado"    => ["Rocio",    "Eneko"],
            "Domingo"   => ["Rocio",    "Eneko"],
        ];
    }

}
