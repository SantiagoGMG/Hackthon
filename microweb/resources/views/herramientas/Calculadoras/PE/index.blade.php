<!--
  Título: Página de Calculadora de Punto de Equilibrio
  Descripción: Esta página web implementa una calculadora para determinar el punto de equilibrio en un análisis de costos y ventas.
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
    <h1 style="text-align: center;">Punto de equilibrio</h1>
    <div class="calculator">
        <div class="card">
            <div class="campo">
                <label style="font-size: 18px; font-weight: 500;" for="Costo_fijo">Costo fijo:</label>
                <input  style="font-size: 18px; font-weight: 500;" type="number" id="Costo_fijo" name="Costo_fijo" placeholder="$ Costo fijo">
            </div>
            <div class="campo">
                <label style="font-size: 18px; font-weight: 500;" for="Costo_de_variable_unitario">Costo de variable unitario:</label>
                <input  style="font-size: 18px; font-weight: 500;" type="number" id="Costo_de_variable_unitario" name="Costo_de_variable_unitario" placeholder="$ Costo de variable unitario">
            </div>
            <div class="campo">
                <label style="font-size: 18px; font-weight: 500;" for="Precio_de_venta_unitario:">Precio de venta unitario:</label>
                <input  style="font-size: 18px; font-weight: 500;" type="number" id="Precio_de_venta_unitario" name="Precio_de_venta_unitario" placeholder="$ Precio de venta unitario">
            </div>
            <div class="resultado" id="resultado">
                <span style="font-size: 18px; font-weight: 500;" id="punto_equilibrio"></span>
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
 * Descripción: Calcula el punto de equilibrio en unidades.
 * Parámetros: Ninguno
 * Retorno: Ninguno
 */
function Calcular() {
  var Costo_fijo = parseFloat(document.getElementById('Costo_fijo').value);
  var Costo_de_variable_unitario =parseFloat(document.getElementById('Costo_de_variable_unitario').value);
  var Precio_de_venta_unitario = parseFloat(document.getElementById('Precio_de_venta_unitario').value);
  

  if (isNaN(Costo_fijo) || isNaN(Costo_de_variable_unitario) || isNaN(Precio_de_venta_unitario)) {
    alert("Por favor, ingrese valores válidos.");
    return;
  }

  var punto_equilibrio = ((Costo_fijo)/(Precio_de_venta_unitario - Costo_de_variable_unitario)); 
  document.getElementById('punto_equilibrio').innerHTML = "Punto de equilibrio: " + punto_equilibrio.toFixed(0) + " Unidades";
}
/**
 * Función Limpiar
 * Descripción: Limpia los campos de entrada y el resultado.
 * Parámetros: Ninguno
 * Retorno: Ninguno
 */
function Limpiar() {
  document.getElementById('Costo_fijo').value = '';
  document.getElementById('Costo_de_variable_unitario').value = '';
  document.getElementById('Precio_de_venta_unitario').value = '';
  document.getElementById('punto_equilibrio').innerHTML = 'Punto equilibrio:';
}

  </script>
@endsection