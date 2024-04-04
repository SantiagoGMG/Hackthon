<!--
    Título: Calculadora de Costos
    Descripción: Esta página web implementa una calculadora de costos que permite calcular el precio final
    de un producto basado en los costos totales y el porcentaje de ganancia deseado.
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
    <h1 style="text-align: center;">Calculadora de Costos</h1>
    <div class="calculator">
        <div class="card">
            <div class="campo">
                <label style="font-size: 18px; font-weight: 500;" for="costos_total">Costos total:</label>
                <input style="font-size: 18px; font-weight: 500;" type="number" id="costos_total" name="costos_total" placeholder="$ Costo">
            </div>
            <div class="campo">
                <label style="font-size: 18px; font-weight: 500;" for="ganancia">Porcentaje de ganancia deseado %:</label>
                <input  style="font-size: 18px; font-weight: 500;" type="number" id="ganancia" name="ganancia" placeholder="Margen %">
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
   * Descripción: Calcula el precio final de un producto basado en los costos totales
   *              y el porcentaje de ganancia deseado.
   * Parámetros: Ninguno
   * Retorno: Ninguno
   */
    function Calcular() {
      var costos_total = parseFloat(document.getElementById('costos_total').value);
      var ganancia = parseFloat(document.getElementById('ganancia').value);

      if (isNaN(costos_total) || isNaN(ganancia)) {
        alert("Por favor ingresa números válidos para los costos totales y el porcentaje de ganancia.");
        return;
      }

      var precio_final = costos_total * (1 + ganancia / 100);
      document.getElementById('precio_final').innerHTML = "Precio final: " + precio_final.toFixed(2);
    }
    /** 
     * Función Limpiar
     * Descripción: Limpia los campos de entrada y el resultado.
     * Parámetros: Ninguno
     * Retorno: Ninguno
     */
    function Limpiar() {
      document.getElementById('costos_total').value = '';
      document.getElementById('ganancia').value = '';
      document.getElementById('precio_final').innerHTML = 'Precio final';
    }
  </script>
  </body>
@endsection