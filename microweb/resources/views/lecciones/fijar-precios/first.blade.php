@extends('layouts.admin')

@section('contenido')
    <section>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">

        <div class="mainContainer">
            <div class="videoAndFormContainer">
                <div class="videoContainer">
                    <video id="myVideo" class="responsive-video" controls controlslist="nodownload" type="video/mp4"
                        src="https://static.enko.org/videos/9+febrero+-+Finanzas+_+Los+costos+del+chef+Emiliano+2.mp4"></video>
                </div>
                <div class="formContainer">

                    <form id="primeraPregunta" style="display: none;">
                        <h2>Formulario</h2>
                        <p>¿Cuál de las siguientes acciones consideras la más apropiada?</p>

                        <input type="radio" id="respuesta1_1" name="respuesta_correcta" value="Cerrar el local">
                        <label for="respuesta1_1">Cerrar el local</label><br>

                        <input type="radio" id="respuesta1_2" name="respuesta_correcta"
                            value="Endeudarse para saldar una deuda">
                        <label for="respuesta1_2">Endeudarse para saldar una deuda</label><br>

                        <input type="radio" id="respuesta1_3" name="respuesta_correcta" value="Evaluar mis costos">
                        <label for="respuesta1_3">Evaluar mis costos</label><br><br>

                        <button type="submit">Enviar</button>
                    </form>
                    <form id="segundaPregunta" style="display: none;">
                        <h2>Formulario</h2>
                        <p>¿Qué se considera al costear?</p>

                        <input type="radio" id="respuesta2_1" name="respuesta_correcta"
                            value="Materia prima, Mano de obra y Costos indirectos">
                        <label for="respuesta2_1">Materia prima, Mano de obra y Costos indirectos</label><br>

                        <input type="radio" id="respuesta2_2" name="respuesta_correcta" value="Producto, Precio, Empaque">
                        <label for="respuesta2_2">Producto, Precio, Empaque </label><br>

                        <input type="radio" id="respuesta2_3" name="respuesta_correcta"
                            value="Costo de Oportunidad, Costo hundido, Costo marginal">
                        <label for="respuesta2_3">Costo de Oportunidad, Costo hundido, Costo marginal</label><br><br>

                        <button type="submit">Enviar</button>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <style>
        .mainContainer {
            max-width: 100%;
            overflow: hidden;
            padding: 20px;
        }

        .responsive-video {
            width: 100%;
            height: auto;
            border: 0px;
        }

        .videoAndFormContainer {
            display: flex;
            flex-wrap: wrap;
        }

        .formContainer .primeraPregunta {
            margin-left: 20px;
        }

        .videoContainer,
        .formContainer {
            flex: 1 1 50%;
            max-width: 50%;
        }

        .formContainer {
            margin-top: 20px;
            text-align: justify;
        }

        @media screen and (max-width: 768px) {

            .videoContainer,
            .formContainer {
                flex: 1 1 100%;
                max-width: 100%;
            }
        }

        form {
            font-family: 'Arial', sans-serif;
            margin: 10px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background: #f9f9f9;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        p {
            margin-bottom: 10px;
        }

        input[type="radio"] {
            display: none;
        }

        label {
            display: block;
            background: #f2f2f2;
            padding: 10px;
            margin-bottom: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="radio"]:checked+label {
            background: #d0e0f0;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: none;
            border-radius: 4px;
            background: #24549C;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background: #24545C;
        }

        /* Estilo para la respuesta correcta */
        .correcta {
            background-color: #7FFF7F;
        }
    </style>
    <script>
        var video = document.getElementById("myVideo");
        var form1 = document.getElementById("primeraPregunta");
        var form2 = document.getElementById("segundaPregunta");
        var form1Submitted = false;
        var form2Submitted = false;

        // Escuchar el evento de tiempo actualizado del video
        video.addEventListener("timeupdate", function() {
            // Verificar el tiempo actual del video y mostrar el formulario si es necesario
            if (video.currentTime >= 20 && !form1Submitted) {
                form1.style.display = "block";
                form1Submitted = true;
                video.pause();

            }
            if (video.currentTime >= 98 && !form2Submitted) {
                form2.style.display = "block";
                form2Submitted = true;
                video.pause();
            }
        });

        // Manejar el envío del primer formulario
        form1.addEventListener("submit", function(event) {
            event.preventDefault(); // Evitar el comportamiento por defecto de enviar el formulario
            // Verificar qué opción ha seleccionado el usuario
            var respuestaSeleccionada = document.querySelector('input[name="respuesta_correcta"]:checked');
            if (respuestaSeleccionada !== null && respuestaSeleccionada.value == "Evaluar mis costos") {
                // Si la respuesta seleccionada es correcta, aplicar la clase "correcta"
                respuestaSeleccionada.nextElementSibling.classList.add("correcta");
                // Mostrar un mensaje indicando que la respuesta es correcta
                alert("¡Respuesta correcta! ¡Recibiste una llave!");
            } else {
                // Si la respuesta seleccionada es incorrecta, mostrar un mensaje de error
                alert("Respuesta incorrecta.");
            }
            form1.style.display = "none";
            video.play(); // Continuar reproducción del video después de enviar el formulario
        });

        // Manejar el envío del segundo formulario
        form2.addEventListener("submit", function(event) {
            event.preventDefault(); // Evitar el comportamiento por defecto de enviar el formulario
            // Verificar qué opción ha seleccionado el usuario
            var respuestaSeleccionada = document.querySelector('input[name="respuesta_correcta"]:checked');
            if (respuestaSeleccionada !== null && respuestaSeleccionada.value ===
                "Materia prima, Mano de obra y Costos indirectos") {
                // Si la respuesta seleccionada es correcta, aplicar la clase "correcta"
                respuestaSeleccionada.nextElementSibling.classList.add("correcta");
                // Mostrar un mensaje indicando que la respuesta es correcta
                alert("¡Respuesta correcta! ¡Recibiste una llave!");
            } else {
                // Si la respuesta seleccionada es incorrecta, mostrar un mensaje de error
                alert("Respuesta incorrecta.");
            }
            // Ocultar el formulario y continuar reproducción del video después de enviar el formulario
            form2.style.display = "none";
            video.play();
        });
    </script>
@endsection
