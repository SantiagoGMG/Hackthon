<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario - ¿Qué harían ustedes si estuvieran en la misma situación?</title>
</head>
<body>
    <h2>Formulario</h2>
    <form id="primeraPregunta">
        <label for="respuesta">¿Qué harían ustedes si estuvieran en la misma situación?</label><br>
        <textarea id="respuesta" name="respuesta" rows="4" required></textarea><br><br>

        <p>¿Cuál de las siguientes acciones consideras la más apropiada?</p>

        <input type="radio" id="respuesta1" name="respuesta_correcta" value="Cerrar el local">
        <label for="respuesta1">Cerrar el local</label><br>

        <input type="radio" id="respuesta2" name="respuesta_correcta" value="Endeudarse para saldar una deuda">
        <label for="respuesta2">Endeudarse para saldar una deuda</label><br>

        <input type="radio" id="respuesta3" name="respuesta_correcta" value="Evaluar mis costos">
        <label for="respuesta3">Evaluar mis costos</label><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>