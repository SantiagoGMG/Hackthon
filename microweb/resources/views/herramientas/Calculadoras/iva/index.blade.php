<!--
  Título: Página de Calculadora de Impuestos
  Descripción: Esta página web implementa una calculadora para determinar el precio de venta con y sin impuestos, 
  dados el costo, el margen de ganancia y el tipo de impuesto.
-->
@extends('layouts.admin')
@section('contenido')

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
    <div class="card">
      <h1>Calculadora de impuestos</h1>
      <div class="calculator">
        <table>
          <tr>
            <td><label for="costo">Costo:</label></td>
            <td><input type="number" id="costo" placeholder="Costo"></td>
          </tr>
          <tr>
            <td><label for="margen">Margen (%):</label></td>
            <td><input type="number" id="margen" placeholder="Margen"></td>
          </tr>
          <tr>
            <td><label for="impuesto">Impuesto:</label></td>
            <td>
              <select id="impuesto">
                <option value="iva">IVA (16%)</option>
                <option value="isr">ISR (30%)</option>
              </select>
            </td>
          </tr>
        </table>
        <button style="font-size: 18px; font-weight: 500;" onclick="Calcular()" class="boton calcular">Calcular</button>
        <button style="font-size: 18px; font-weight: 500;" onclick="Limpiar()" class="boton limpiar">Limpiar</button>
        <div class="resultado">
          <span id="resultado"></span>
          <span id="resultadoSinImpuesto"></span>
        </div>
      </div>
    </div>

    <script>
      /**
       * Función Calcular
       * Descripción: Calcula el precio de venta con y sin impuestos, dados el costo, el margen de ganancia y el tipo de impuesto.
       * Parámetros: Ninguno
       * Retorno: Ninguno
       */
      function Calcular() {
        var costo = parseFloat(document.getElementById('costo').value);
        var margen = parseFloat(document.getElementById('margen').value);
        var impuesto = document.getElementById('impuesto').value;

        if (isNaN(costo) || isNaN(margen)) {
          document.getElementById('resultado').innerHTML = "Por favor, ingrese valores válidos.";
          return;
        }

        var impuestoPorcentaje = 0;
        if (impuesto === 'iva') {
          impuestoPorcentaje = 16;
        } else if (impuesto === 'isr') {
          impuestoPorcentaje = 30;
        }

        var precioAntesImpuesto = costo + (costo * (margen / 100));
        var precioConImpuesto = precioAntesImpuesto + (precioAntesImpuesto * (impuestoPorcentaje / 100));
        var precioSinImpuesto = precioAntesImpuesto;

        document.getElementById('resultado').innerHTML = "Precio de Venta con " + impuesto.toUpperCase() + " (" + impuestoPorcentaje + "%): $" + precioConImpuesto.toFixed(2);
        document.getElementById('resultadoSinImpuesto').innerHTML = "Precio de Venta sin " + impuesto.toUpperCase() + ": $" + precioSinImpuesto.toFixed(2);
      }
      /**
       * Función Limpiar
       * Descripción: Limpia los campos de entrada y los resultados de la calculadora.
       * Parámetros: Ninguno
       * Retorno: Ninguno
       */
      function Limpiar() 
      {
        document.getElementById('costo').value = '';
        document.getElementById('margen').value = '';
        document.getElementById('impuesto').selectedIndex = 0;
        document.getElementById('resultado').innerHTML = '';
        document.getElementById('resultadoSinImpuesto').innerHTML = '';
      }
    </script>
  </body>
</html>

@endsection
