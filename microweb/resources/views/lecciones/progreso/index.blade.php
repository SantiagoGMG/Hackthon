@extends ('layouts.admin')
@section ('contenido')

<style>

    #line1 {
        position: relative;
        left: 720px;
        top: 85px;
        transform: rotate(-18deg);
        font-size: 25px;
    }

    #line2 {
        position: relative;
        left: 650px;
        top: -35px;
        transform: rotate(18deg);
        font-size: 25px;
    }

    #line3 {
        position: relative;
        left: 650px;
        top: -145px;
        transform: rotate(-18deg);
        font-size: 25px;
        z-index: 0;
    }

    #line4 {
        position: relative;
        left: 680px;
        top: -270px;
        transform: rotate(35deg);
        font-size: 25px;
    }

    .button_container {
        position: relative;
        width: 300px; /* Ancho del contenedor */
        height: 300px; /* Alto del contenedor */
        margin: auto;
    }

    .button_progress {
        display: inline-block;
        width: 80px;
        height: 80px;
        line-height: 80px;
        text-align: center;
        background-color: #5BA7FF;
        border-radius: 50%;
        font-size: 24px;
        color: white;
        text-decoration: none;
        position: absolute;
    }

    .button2 {
        z-index: 999;
    }

    .button3 {
        z-index: 99;
    }

    .button4 {
        z-index: 999;
    }

    .button5 {
        z-index: 999;
    }

    .button1 { top: 130%; left: 10%; } 
    .button2 { top: 110%; left: 60%;
               background-color: #324d6a;
     }
    .button3 { top: 80%; left: -10%;
        background-color: #324d6a }
    .button4 { top: 60%; left: 60%; 
        background-color: #324d6a}
    .button5 { top: 20%; left: 10%; 
        background-color: #324d6a   }
</style>

<div class="button_container">
    <a href="/lecciones/fijar-precios" class="button_progress button1">1</a>
    <a href="/lecciones/fijar-precios" class="button_progress button2">2</a>
    <a href="/lecciones/fijar-precios" class="button_progress button3">3</a>
    <a href="/lecciones/fijar-precios" class="button_progress button4">4</a>
    <a href="/lecciones/fijar-precios" class="button_progress button5">5</a>
</div>
<table id="line1">
    <th scope="col">-----</th>
    <th scope="col">-----</th>
    <th scope="col">-----</th>
</table>
<table id="line2">
    <th scope="col">-----</th>
    <th scope="col">-----</th>
    <th scope="col">-----</th>
    <th scope="col">-----</th>
    <th scope="col">-----</th>
</table>
<table id="line3">
    <th scope="col">-----</th>
    <th scope="col">-----</th>
    <th scope="col">-----</th>
    <th scope="col">-----</th>
    <th scope="col">-----</th>
</table>
<table id="line4">
    <th scope="col">-----</th>
    <th scope="col">-----</th>
    <th scope="col">-----</th>
    <th scope="col">-----</th>
    <th scope="col">-----</th>
</table>



@endsection