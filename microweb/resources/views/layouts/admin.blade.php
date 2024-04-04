<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Aqui puedes agregar tus estilos CSS -->
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-z1K2vQlGv47ZlZr+z1aBphPw1aZvlp/8MtFMOl/rM74nxhoQxtmX6Is16DRDYsDjLe7Hb8F8snwTSd/nO1fxRQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <header class="rectangle-parent">
        <div class="frame-child"></div>
        <div class="frame-parent">
            <navbar>
                <div class="frame-wrapper">
                    <a href="/inicio" class="herramientas-image-parent">
                        <div class="herramientas-image">
                            <div class="inicio1">Inicio</div>
                        </div>
                        <img src="https://th.bing.com/th/id/R.19c465a4d4cc35fd3a18e0f7977a482e?rik=dHEo9RQG3DdK5Q&pid=ImgRaw&r=0"
                            width="50px">
                    </a>
            </navbar>
        </div>
        </div>
        <div class="frame-container">
            <div class="lecciones-herramientas-parent">
                <a href="/lecciones" class="lecciones-herramientas">
                    <div class="lecciones-wrapper">
                        <div class="lecciones">Lecciones</div>
                    </div>
                    <img class="logo-image-icon" loading="lazy" alt=""
                        src="https://cdn-icons-png.flaticon.com/512/10690/10690924.png" />
                </a>
                <a href="/herramientas" class="lecciones-herramientas1">
                    <div class="herramientas-wrapper">
                        <div class="herramientas">Herramientas</div>
                    </div>
                    <img class="image-8-icon" loading="lazy" alt=""
                        src="https://th.bing.com/th/id/OIP.NnrfevyixXfBRVWn3zij0gHaHa?rs=1&pid=ImgDetMain" />
                </a>
            </div>
        </div>
        <div class="frame-div">
            <div class="frame-group">
                <a href="/Tienda" class="tienda-wrapper">
                    <div class="tienda">Tienda</div>
                </a>
                <img class="store-solid-1-icon" loading="lazy" alt=""
                    src="https://cdn-icons-png.flaticon.com/512/726/726569.png" />
            </div>
        </div>
        <div class="profile-image">
            <div class="frame-parent1">
                <a href="/perfil" class="perfil-wrap  per">
                    <div class="perfil">Perfil</div>
                </a>
                <img class="image-15-icon" loading="lazy" alt=""
                    src="https://cdn-icons-png.flaticon.com/512/6565/6565343.png" />
            </div>
        </div>
    </header>
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-1">
                            <!--Contenido-->
                            @yield('contenido')
                            <!--Fin Contenido-->
                        </div>
                    </div>

                </div>
            </div><!-- /.row -->
    </div><!-- /.box-body -->
    </div><!-- /.box -->
    </div><!-- /.col -->
    </div><!-- /.row -->

    </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <script src="{{ asset('js/linea.js') }}"></script>
    

</html>
