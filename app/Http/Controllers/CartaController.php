<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartaController extends Controller
{
    // Queremos que salga la carta
    public function index() {
        return view('carta.index', [
            'productos' => $this->carta()
        ]);
    }

public function view($codigo) {
 // Todo esto sustituye a return view('carta.view', ['producto' => ['codigo' => 'A', 'nombre'=> "café solo", 'precio' => 1.20]]);
    $productos = $this->carta();
    $resultado = [];

    foreach ($productos as $producto) {
        if ( $producto["codigo"] === $codigo) {
            $resultado = $producto;
            break;
        }
    }
    // return  $resultado; // para poner /carta/codigo y que se vea el array que devuelve en el browser

    // Si no está vacía crea la vista del producto concreto que hemos cribado arriba
    if (!empty($resultado)) {
        return view('carta.view', ['producto' => $resultado]); // carpeta carta. archivo
        // los parámetros que pasamos a la vista van en un array asociativo ['producto' => $resultado] donde las claves son el nombre que utilizaremos en la plantilla
    }

   abort(404, 'Producto no hallado');
}
    // Esto nunca deberia crearse aquí pero imita la BD
    private function carta() : array {
        return [
            ["codigo"=>'A', "nombre" => "Cafe solo",        "precio" => 1.20],
            ["codigo"=>'B', "nombre" => "Cafe con leche",   "precio" => 1.50],
            ["codigo"=>'C', "nombre" => "Bocadillo",        "precio" => 2.80],
            ["codigo"=>'D', "nombre" => "Agua",             "precio" => 1.00]
        ];
    }
}
