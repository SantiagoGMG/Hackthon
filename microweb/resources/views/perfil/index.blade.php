@extends ('layouts.admin')
@section ('contenido')

<h1> </h1>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <style>
        .formulario {
            display: flex;
            justify-content: space-between;
            max-width: 600px;
            margin: auto;
        }
        .columna {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .columna label {
            font-weight: bold;
        }
        .columna input {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
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
        </div>
    </form>
</body>
</html>



@endsection