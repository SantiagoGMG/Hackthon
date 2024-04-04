@extends ('layouts.admin')
@section ('contenido')
<!DOCTYPE html>
<title>Inicio</title>
<h1> </h1>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); /* Columnas adaptativas */
            gap: 20px; /* Espacio entre botones */
            justify-content: center;
        }
        .boton {
            display: inline-block;
            border: none;
            color: white;
            text-align: center;
            padding: 20px; 
            text-decoration: none;
            font-size: 20px;
            cursor: pointer;
            border-radius: 30px;
            width: 100%;
        }
        /* Definiciones de colores de los botones */
        .boton1 {background-color: #008CBA;} /* Azul */
        .boton2 {background-color: #4CAF50;} /* Verde */
        .boton3 {background-color: #f44336;} /* Rojo */
        .boton4 {background-color: #e91e63;} /* Rosa */
        .boton5 {background-color: #9c27b0;} /* Morado */
        .boton6 {background-color: #673ab7;} /* Violeta oscuro */
        .boton7 {background-color: #3f51b5;} /* Azul oscuro */
        .boton8 {background-color: #2196f3;} /* Azul claro */
        .boton9 {background-color: #00bcd4;} /* Cian */
        .boton10 {background-color: #009688;} /* Verde azulado */
    </style>
</head>
<body>
    <div class="grid-container">
        <button class="boton boton1">1 Activa tu negocio</button>
        <button class="boton boton2">2 Desarrollate como líder</button>
        <button class="boton boton3">3 Impulsa tu negocio</button>
        <button class="boton boton4">4 Finanzas para tu negocio</button>
        <button class="boton boton5">5 Vende más</button>
        <button class="boton boton6">6 Formalízate</button>
        <button class="boton boton7">7 Digitalízate</button>
        <button class="boton boton8">8 Profesionalízate</button>
        <button class="boton boton9">9 Empresas familiares</button>
        <button class="boton boton10">10 Educación Financiera</button>
    </div>
</body>
</html>
@endsection
