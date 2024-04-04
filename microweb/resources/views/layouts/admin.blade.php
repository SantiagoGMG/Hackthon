<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/global.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-z1K2vQlGv47ZlZr+z1aBphPw1aZvlp/8MtFMOl/rM74nxhoQxtmX6Is16DRDYsDjLe7Hb8F8snwTSd/nO1fxRQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background-color: #fce574;
        }

        header {
            background-color: #fce574;
            box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
            padding: 10px;
        }

        .menu-item {
            text-decoration: none;
            color: black;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .menu-item img {
            width: 50px;
            height: auto;
            margin-bottom: 5px;
        }

        .content-wrapper {
            padding: 20px;
        }

        @media screen and (min-width: 768px) {
            .menu-container {
                display: flex;
                justify-content: space-between;
            }

            .menu-item {
                flex-direction: row;
                margin: 0;
            }

            .menu-item:first-child {
                margin-right: auto;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="menu-container">
            <a href="/inicio" class="menu-item">
                <img src="https://th.bing.com/th/id/R.19c465a4d4cc35fd3a18e0f7977a482e?rik=dHEo9RQG3DdK5Q&pid=ImgRaw&r=0" alt="Inicio">
                <div>Inicio</div>
            </a>
            <a href="/lecciones" class="menu-item">
                <img src="https://cdn-icons-png.flaticon.com/512/10690/10690924.png" alt="Lecciones">
                <div>Lecciones</div>
            </a>
            <a href="/herramientas" class="menu-item">
                <img src="https://th.bing.com/th/id/OIP.NnrfevyixXfBRVWn3zij0gHaHa?rs=1&pid=ImgDetMain" alt="Herramientas">
                <div>Herramientas</div>
            </a>
            <a href="/Tienda" class="menu-item">
                <img src="https://cdn-icons-png.flaticon.com/512/726/726569.png" alt="Tienda">
                <div>Tienda</div>
            </a>
            <a href="/perfil" class="menu-item">
                <img src="https://cdn-icons-png.flaticon.com/512/6565/6565343.png" alt="Perfil">
                <div>Perfil</div>
            </a>
        </div>
    </header>
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <!--Contenido-->
                            @yield('contenido')
                            <!--Fin Contenido-->
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <script src="{{ asset('js/linea.js') }}"></script>
</body>
</html>
