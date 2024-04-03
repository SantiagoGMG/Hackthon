<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\CalBasicaController;

Route::get('/', function () {
    return view('layouts.admin');
});

Route::get('/inicio', function () {
    return view('inicio.index');
});

Route::get('/lecciones', function () {
    return view('lecciones.index');
});


Route::get('/herramientas/calculadoras/basica', [CalBasicaController::class, 'index']);

Route::get('/Tienda', function () {
    return view('Tienda.index');
});

Route::get('/perfil', function () {
    return view('perfil.index');
});
