<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\CalBasicaController;
use App\Http\Controllers\LeccionesController;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\HerramientasController;

Route::get('/', function () {
    return view('layouts.admin');
});

Route::get('/inicio', function () {
    return view('inicio.index');
});

Route::get('/lecciones', function () {
    return view('lecciones.index');
});

Route::get('/progreso/fijar-precios', function () {
    return view('lecciones.progreso.index');
});

Route::get('/lecciones/fijar-precios', function () {
    return view('lecciones.fijar-precios.first');
});

Route::get('/herramientas/calculadoras/IVA', [CalBasicaController::class, 'indexIVA']);

Route::get('/herramientas/calculadoras/basica', [CalBasicaController::class, 'index']);

Route::get('/herramientas/calculadoras/avanzada', [CalBasicaController::class, 'indexA']);

Route::get('/herramientas/calculadoras/PuntoEquilibrio', [CalBasicaController::class, 'indexPE']);



Route::get('/Tienda', function () {
    return view('Tienda.index');
});

Route::get('/perfil', function () {
    return view('perfil.index');
});
Route::get('/herramientas', [HerramientasController::class, 'index']);

