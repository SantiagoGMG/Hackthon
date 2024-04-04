@extends('layouts.admin')
@section('contenido')

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="{{asset('css/cards.css')}}">
  </head>

  <div id="tarjeta">

        <div class="card1">
          <img class="prueba" src="https://cdn-icons-png.flaticon.com/512/595/595759.png" alt="Imagen de la herramienta" width="200">
          <p style="font-size: 20px; font-weight: 50;">Necesitas concluir el curso:<strong>”Inventarios: Del control manual al digital”</strong>para acceder a esta herramienta</p>
          <a href="https://www.enko.org/mx/encoppel/seccion/inventarios-del-control-manual-al-digital-320/275" class="botton1" >Ir al curso</a>
        </div>

        <div class="card">
          <img class="prueba" src="https://cdn-icons-png.flaticon.com/512/342/342344.png" alt="Imagen de la herramienta" width="200">
          <h1 style="font-size: 40px; font-weight: 700;">Calculadora básica</h1>
          <a href="/herramientas/calculadoras/basica" class="botton" >Usar</a>
        </div>

        <div class="card">
          <img class="prueba" src="https://cdn-icons-png.flaticon.com/512/3707/3707848.png" alt="Imagen de la herramienta" width="200">
          <h1 style="font-size: 40px; font-weight: 700;">Calculadora avanzada</h1>
          <a href="/herramientas/calculadoras/avanzada" class="botton">Usar</a>
        </div>

</div>

<div id="tarjeta">
        <div class="card">
          <img class="prueba" src="https://cdn-icons-png.flaticon.com/512/15088/15088257.png" alt="Imagen de la herramienta" width="200">
          <h1 style="font-size: 40px; font-weight: 700;">Punto de equilibrio</h1>
          <a href="/herramientas/calculadoras/PuntoEquilibrio" class="botton">Usar</a>
        </div>

        <div class="card">
          <img class="prueba" src="https://cdn6.aptoide.com/imgs/d/5/d/d5d1639c106e40cb18cb272b7dbead44_icon.png" alt="Imagen de la herramienta" width="200">
          <h1 style="font-size: 40px; font-weight: 700;">Calculadora de impuestos</h1>
          <a href="/herramientas/calculadoras/IVA" class="botton">Usar</a>
        </div>
</div>

@endsection