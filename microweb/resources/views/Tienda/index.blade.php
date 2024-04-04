@extends ('layouts.admin')
@section ('contenido')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="{{asset('css/cards.css')}}">
  </head>

<div class="card">
    <h1>Llaves totales: 139</h1>
</div>

  <div id="tarjeta">
    
        <div class="card">
          <img class="producto" src="https://cdn-icons-png.flaticon.com/512/2250/2250329.png" alt="Imagen del prodcuto" width="200">
          <h2>Pack de bienvenida</h2>
          <a href="#" class="botton">10 Llaves</a>
        </div>

        <div class="card">
          <img class="producto" src="https://cdn-icons-png.flaticon.com/512/147/147263.png" alt="Imagen del prodcuto" width="200">
          <h2>Terminal</h2>
          <a href="#" class="botton">150 Llaves</a>
        </div>

        <div class="card">
          <img class="producto" src="https://cdn-icons-png.flaticon.com/512/2695/2695969.png" alt="Imagen del prodcuto" width="200">
          <h2>Monedero</h2>
          <a href="#" class="botton">320 Llaves</a>
        </div>
    </div>

    <div id="tarjeta">
        <div class="card">
          <img class="producto" src="https://cdn-icons-png.flaticon.com/512/4762/4762311.png" alt="Imagen del prodcuto" width="200">
          <h2>Curso certificado</h2>
          <a href="#" class="botton">190 Llaves</a>
        </div>

        <div class="card">
          <img class="producto" src="https://cdn-icons-png.flaticon.com/512/5166/5166373.png" alt="Imagen del prodcuto" width="200">
          <h2>Equipo de computo</h2>
          <a href="#" class="botton">6700 Llaves</a>
        </div>

        <div class="card">
          <img class="producto" src="https://cdn-icons-png.flaticon.com/512/5203/5203587.png" alt="Imagen del prodcuto" width="200">
          <h2>Curso de Marketing</h2>
          <a href="#" class="botton">180 Llaves</a>
        </div>
    </div>

@endsection