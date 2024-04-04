@extends ('layouts.admin')
@section ('contenido')

<h1> </h1>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <style>
        .contenedor {
            display: flex;
            justify-content: space-between;
            max-width: 800px;
            margin: auto;
        }
        .formulario, .formulario2 {
            display: flex;
            flex-direction: row;
            gap: 10px;
            width: 300px;
        }
        .columna, .columna2 {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }
        .columna label, .columna2 label {
            font-weight: bold;
            font-size: 18px;
        }
        .columna input, .columna2 input {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        } 
        .boton-guardar {
            display: block;
            width: 200px;
            height: 50px;
            margin: 20px auto;
            background-color: #24549C;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
        }
        .boton-guardar:hover {
            background-color: #01ABE0;
        }
        .linea-vertical {
            border-left: 5px solid #3A5E98; /* Ajusta este valor para cambiar el grosor de la línea */
            height: 50%;
            position: absolute;
            left: 52%;
        }
        .foto-perfil {
            width: 200px; /* Ajusta este valor para cambiar el tamaño de la foto */
            height: 200px;
            border-radius: 50%; /* Esto hace que la foto tenga forma circular */
            margin-right: 100px; /* Ajusta este valor para cambiar el espacio a la derecha de la foto */
            left: 5%;
            position: absolute;
        }
    </style>
</head>
<body>
        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Foto de perfil" class="foto-perfil">
<div class="contenedor">
    <form class="formulario">
        <div class="columna">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">
            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos">
            <label for="fecha-nacimiento">Fecha de nacimiento:</label>
            <input type="date" id="fecha-nacimiento" name="fecha-nacimiento">
            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo">
            <label for="nivel-educativo">Nivel educativo:</label>
            <input type="text" id="nivel-educativo" name="nivel-educativo">
        </div>
        <div class="columna">
            <label for="genero">Género:</label>
            <input type="text" id="genero" name="genero">
            <label for="codigo-postal">Código postal:</label>
            <input type="text" id="codigo-postal" name="codigo-postal">
            <label for="pais">País:</label>
            <input type="text" id="pais" name="pais">
            <label for="ciudad">Ciudad:</label>
            <input type="text" id="ciudad" name="ciudad">
            <label for="estado">Estado:</label>
            <input type="text" id="estado" name="estado">
            <button class="boton-guardar">Guardar cambios</button>
        </div>
    </form>
    <div class="linea-vertical"></div>
    <form class="formulario2">
        <div class="columna2">
            <label for="sector">Tipo de sector:</label>
            <input type="text" id="sector" name="sector">
            <label for="empleados">Número de empleados:</label>
            <input type="num" id="empleados" name="empleados">
            <label for="ingresos-semanales">Ingresos semanalas:</label>
            <input type="num" id="ngresos-semanales" name="ngresos-semanales">
            <label for="nombre-negocio">Nombre del negocio:</label>
            <input type="text" id="nombre-negocio" name="nombre-negocio">
        </div>
        <div class="columna2">
            <label for="antiguedad">Antiguedad del negocio:</label>
            <input type="num" id="antiguedad" name="antiguedad">
            <label for="negocio-familiar">¿Tu negocio es familiar?</label>
            <input type="text" id="negocio-familiar" name="negocio-familiar">
            <label for="credito">¿Has adquiridio un crédito en los ultimos 6 meses?</label>
            <input type="text" id="credito" name="credito">
            <label for="eres-cliente">¿Eres cliente?</label>
            <input type="text" id="eres-cliente" name="eres-cliente">
            <button class="boton-guardar">Guardar cambios</button>
        </div>
    </form>
</body>
</html>
@endsection