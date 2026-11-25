<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HorarioController extends Controller
{
    // Queremos que salga el horario
    public function index() {
        return view('horario.index', ['dia' => $this->horario()]);
    }

    public function view($dia) {
        $horario = $this->horario();
        $resul = [];

        foreach ( $horario as $dia) {
            if ( $horario['dia']  === $dia ) {
            $resultado = $dia;
            break;
            }
        }

        if ( !empty($resul)) {
            return view('horario.viwe', ['dia' => $dia]);
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

}
