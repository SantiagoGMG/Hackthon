@extends ('layouts.admin')
@section ('contenido')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="{{asset('css/calColors.css')}}">
    <link rel="stylesheet" href="{{asset('css/calculadoraBasica.css')}}">
  </head>
  <body>
    <div class="calculadora-basica-de-costos">
      <header>
        <h1>Calculadora de Costos</h1>
      </header>
      <section class="calculate-button">
        <div class="reset-button">
          <div class="costs-total-rect">
            <div class="precio-final-rect">
              <div class="final-price-summary">
                <div class="final-price-summary-inner">
                  <div class="costos-total-parent">
                    <div class="costos-total">Costos total</div>
                    <input type="number" name="costos_total" value="0" id="costos_total">
                  </div>
                </div>
              </div>
            </div>
            <div class="porcentaje-de-ganancia-deseado-parent">
              <div class="porcentaje-de-ganancia-deseado-parent">Porcentaje de ganancia deseado %</div>
              <input type="number" name="ganancia" value="0" id="ganancia">
              <div class="rectangle-wrapper"></div>
            </div>
          </div>
          <div class="frame-div">
                  <div class="precio-final-wrapper">
                    <div class="precio-final" id="precio_final">Precio final: </div>
                  </div>
                </div>
          <div class="reset-button-inner">
            <div class="frame-parent1">
            <button onclick="Calcular()" class="rectangle-group">
                <div class="frame-child1"></div>
                <div class="calcular">Calcular</div>
              </button>
            <button onclick="Limpiar()" class="rectangle-container">
                <div class="frame-child2"></div>
                <div class="limpiar">Limpiar</div>
              </button>              
            </div>
          </div>
        </div>
      </section>
    </div>
  </body>

<script>
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

    function Limpiar() {
      document.getElementById('costos_total').value = '0';
      document.getElementById('ganancia').value = '0';
      document.getElementById('precio_final').innerHTML = '';
    }
  </script>
@endsection