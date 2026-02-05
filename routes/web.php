<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\PaginaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', function () {
    return 'Hola muy buenas tardes';
});

Route::get('/usuario/{nombre}', function ($nombre) {
    return "Hola, $nombre";
});

Route::get('/suma/{a}/{b}', function ($a, $b) {
    $suma = $a + $b;
    return $suma;
});

Route::get('/inicio', [PaginaController::class, 'inicio']);
Route::get('/contacto', [PaginaController::class, 'contacto']);