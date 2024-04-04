<!--
  Título: Calculadora Avanzada
  Descripción: Esta página web implementa una calculadora avanzada que 
  permite calcular el precio final de un producto basado en varios costos y un margen de beneficio.
-->
@extends ('layouts.admin')
@section ('contenido')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="{{asset('css/calColors.css')}}">
    <link rel="stylesheet" href="{{asset('css/calculadoraBasica.css')}}">
    <link rel="stylesheet" href="{{asset('css/cards.css')}}">
    <link rel="stylesheet" href="{{asset('css/cardsCal.css')}}">
  </head>

  <body>
      <div>
    <h1 style="text-align: center;">Calculadora avanzada</h1>
    <div class="calculator">
        <div class="card">
            <div class="campo">
                <label style="font-size: 18px; font-weight: 500;" for="costos_unidad">Costo de materia prima por unidad:</label>
                <input style="font-size: 18px; font-weight: 500;" type="number" id="costos_unidad" name="costos_unidad" placeholder="$ Costo">
            </div>
            <div class="campo">
                <label style="font-size: 18px; font-weight: 500;" for="Mano_de_obra">Mano de obra:</label>
                <input  style="font-size: 18px; font-weight: 500;" type="number" id="Mano_de_obra" name="Mano_de_obra" placeholder="$ Mano de obra">
            </div>
            <div class="campo">
                <label style="font-size: 18px; font-weight: 500;" for="Gasto_indirecto">Gasto indirecto:</label>
                <input  style="font-size: 18px; font-weight: 500;" type="number" id="Gasto_indirecto" name="Gasto_indirecto" placeholder="$ Gasto indirecto">
            </div>
            <div class="campo">
                <label style="font-size: 18px; font-weight: 500;" for="Margen">Margen %:</label>
                <input  style="font-size: 18px; font-weight: 500;" type="number" id="Margen" name="Margen" placeholder="Margen %">
            </div>
            <div class="resultado" id="resultado">
                <span style="font-size: 18px; font-weight: 500;" id="precio_final"></span>
            </div>
            <div class="acciones">
                <button style="font-size: 18px; font-weight: 500;" onclick="Calcular()" class="boton calcular">Calcular</button>
                <button style="font-size: 18px; font-weight: 500;" onclick="Limpiar()" class="boton limpiar">Limpiar</button>
            </div>
        </div>
    </div>
</div>

<script>
/**
 * Función Calcular
 * Descripción: Calcula el precio final de un producto basado en el costo de materia prima,
 *              mano de obra, gasto indirecto y el margen de beneficio.
 * Parámetros: Ninguno
 * Retorno: Ninguno
 */
function Calcular() {
  var costos_unidad = parseFloat(document.getElementById('costos_unidad').value);
  var Mano_de_obra = parseFloat(document.getElementById('Mano_de_obra').value);
  var Gasto_indirecto =parseFloat(document.getElementById('Gasto_indirecto').value);
  var Margen = parseFloat(document.getElementById('Margen').value); // Asegúrate de que la variable se llame igual aquí

  if (isNaN(costos_unidad) || isNaN(Mano_de_obra) || isNaN(Gasto_indirecto) || isNaN(Margen)) {
    alert("Por favor, ingrese valores válidos.");
    return;
  }

  var precio_final = (costos_unidad + Mano_de_obra + Gasto_indirecto) * (1 + Margen / 100); // Corrección aquí
  document.getElementById('precio_final').innerHTML = "Precio final: $" + precio_final.toFixed(2);
}
/**
 * Función Limpiar
 * Descripción: Limpia los campos de entrada y el resultado.
 * Parámetros: Ninguno
 * Retorno: Ninguno
 */
function Limpiar() {
  document.getElementById('costos_unidad').value = '';
  document.getElementById('Mano_de_obra').value = '';
  document.getElementById('Gasto_indirecto').value = '';
  document.getElementById('Margen').value = '';
  document.getElementById('precio_final').innerHTML = '';
}

  </script>
@endsection