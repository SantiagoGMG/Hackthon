@extends('layouts.admin')
@section('contenido')
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/ranking.css')}}">

    <title>Ranking de Usuarios</title>
  </head>
  <body>
    <h1>Ranking de Usuarios</h1>
    <table>
      <thead>
        <tr>
          <th>Posición</th>
          <th>Usuario</th>
          <th>Llaves Acumuladas</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Maria torres</td>
          <td>150</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Yo</td>
          <td>120</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Juan Pérez</td>
          <td>100</td>
        </tr>
      </tbody>
    </table>
  </body>
</html>


    <style>
        .circle-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap; /* Permite que los elementos se ajusten a la siguiente línea si no caben en la actual */
            margin-top: 20px; /* Espacio entre las filas */
        }

        .circle {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            margin: 0 20px; /* Ajusta el espacio entre los círculos */
        }

        .small-circle {
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 155px;
            height: 155px;
            border-radius: 50%;
            background: rgb(255, 255, 255);
        }

        .circle-text {
            color: rgb(0, 0, 0);
            font-size: 20px;
        }
        /* Media queries para pantallas más pequeñas */
        @media screen and (max-width: 600px) {
            .circle {
                width: 150px;
                height: 150px;
            }

            .small-circle {
                width: 115px;
                height: 115px;
            }

            .circle-text {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="circle-container">
        <div class="circle" style="background: linear-gradient(to right, rgb(69, 230, 69) 80%, rgb(71, 71, 71) 20%);">
            <div class="small-circle">
                <span class="circle-text">Activa tu negocio</span>
            </div>
        </div>

        <div class="circle" style="background: linear-gradient(to right, rgb(235, 215, 64) 8%, rgb(71, 71, 71) 6%);">
            <div class="small-circle">
                <span class="circle-text">Desarrollate como líder</span>
            </div>
        </div>

        <div class="circle" style="background: linear-gradient(to right, hsl(194, 99%, 44%) 90%, rgb(71, 71, 71) 60%);">
            <div class="small-circle">
                <span class="circle-text">Impulsa tu negocio</span>
            </div>
        </div>

        <div class="circle" style="background: linear-gradient(to right, rgb(239, 19, 3) 20%,rgb(71, 71, 71) 2%);">
            <div class="small-circle">
                <span class="circle-text">Finanzas para tu negocio</span>
            </div>
        </div>

        <div class="circle" style="background: linear-gradient(to right, rgb(255, 60, 229) 80%, rgb(71, 71, 71) 10%);">
            <div class="small-circle">
                <span class="circle-text">Vende más</span>
            </div>
        </div>
    </div>
    <br><br>
    <div class="circle-container">
        
        <div class="circle" style="background: linear-gradient(to right, rgb(106, 93, 255) 45%, rgb(71, 71, 71) 40%);">
            <div class="small-circle">
                <span class="circle-text">Formalízate</span>
            </div>
        </div>

        <div class="circle" style="background: linear-gradient(to right, rgb(255, 59, 128) 60%, rgb(71, 71, 71) 40%);">
            <div class="small-circle">
                <span class="circle-text">Digitalízate</span>
            </div>
        </div>

        <div class="circle" style="background: linear-gradient(to right, rgb(255, 175, 14) 72%, rgb(71, 71, 71) 40%);">
            <div class="small-circle">
                <span class="circle-text">Profesionalízate</span>
            </div>
        </div>

        <div class="circle" style="background: linear-gradient(to right, rgb(155, 79, 255) 85%, rgb(71, 71, 71) 30%);">
            <div class="small-circle">
                <span class="circle-text">Empresas familiares</span>
            </div>
        </div>

        <div class="circle" style="background: linear-gradient(to right, rgb(91, 255, 126) 41%, rgb(71, 71, 71) 40%);">
            <div class="small-circle">
                <span class="circle-text">Educación Financiera</span>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
