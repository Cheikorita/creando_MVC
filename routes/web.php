<?php
// agrupar las rutas por tipo o categoría
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartaController;
use App\Http\Controllers\HorarioController;

Route::get('/', function () {
    return view('welcome');
});

// utilizamos el nameSpace para dar la ruta del controlador arriba
Route::get('/carta', [CartaController::class, "index"])->name("carta");

// Ruta para cada uno de los productos
Route::get('/carta/{codigo}', [CartaController::class, "view"])->name("vista_producto");

// ruta del horario
Route::get('/horario', [HorarioController::class, "index"])->name("vista_horario");

// ruta del horario de cada uno
Route::get('/horario/{dia}', [HorarioController::class, "dia"])->name("vista_horario_personal");
