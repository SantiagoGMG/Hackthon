@extends ('layouts.admin')
@section ('contenido')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./calculadoraBasica.css" />
    <link rel="stylesheet" href="./global.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap"
    />
  </head>
  <body>
    <div class="calculadora-basica-de-costos">
          </div>
        </header>
        <section class="calculate-button">
          <div class="reset-button">
            <div class="costs-total-rect">
              <div class="precio-final-rect">
                <div class="final-price-summary">
                  <div class="final-price-summary-inner">
                    <div class="costos-total-parent">
                      <div class="costos-total">Costos total</div>
                      <input type="number" name = "costos_total" value="0" id="1">
                    </div>
                  </div>
                  <div class="frame-div">
                    <div class="precio-final-wrapper">
                      <div class="precio-final">Precio final:</div>

                    </div>
                  </div>
                </div>
              </div>
              <div class="porcentaje-de-ganancia-deseado-parent">
                <div class="porcentaje-de-ganancia-deseado-parent">Porcentaje de ganancia deseado %</div>
                <input type="number" name = "ganancia" value="0" id="2">
                <div class="rectangle-wrapper">
                </div>
              </div>
            </div>
            <div class="reset-button-inner">
              <div class="frame-parent1">
                <button onclick="Calcular()" class="rectangle-group">
                  <div class="frame-child1"></div>
                  <div class="calcular">Calcular</div>
                  
                </button>
                <button class="rectangle-container">
                  <div class="frame-child2"></div>
                  <div class="limpiar">Limpiar</div>
                </button>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>
  </body>
</html>

<script>

    var input_1 = document.getElementById("1");
    var input_2 = document.getElementById("2");
    
  function Calcular(total_costo, ganancia) {
    console.log(input_1,input_2);

  }
</script>
@endsection