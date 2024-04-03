<!DOCTYPE html>
<html lang="es">
    
  <!--
  casita = image-23@2x.png
  lecciones = vector.svg
  herramientas = image-24@2x.png
  tienda = storesolid-6.svg
  
  -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <!-- Aqui puedes agregar tus estilos CSS --> 
    <link rel="stylesheet" href="{{asset('css/global.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    
</head> 

    <body>
    <div class="inicio-parent">
          <main class="inicio">
            <div class="inicio-child"></div>
            <header class="rectangle-parent">
              <div class="frame-child"></div>
              <div class="frame-parent">
                <div class="frame-wrapper">
                  <a href="/inicio" class="herramientas-image-parent">
                    <div class="herramientas-image">
                      <div class="inicio1">Inicio</div>
                    </div>
                    <img
                      class="image-7-icon"
                      loading="lazy"
                      alt=""
                      src="{{ asset('img/image-23@2x.png') }}"
                    />
                  </a>
                </div>
                <div class="frame-item"></div>
              </div>
              <div class="frame-container">
                <div class="lecciones-herramientas-parent">
                  <a href="/lecciones" class="lecciones-herramientas">
                    <div class="lecciones-wrapper">
                      <div class="lecciones">Lecciones</div>
                    </div>
                    <img
                      class="logo-image-icon"
                      loading="lazy"
                      alt=""
                      src="./img/vector.svg"
                    />
                  </a>
                  <a href="/herramientas" class="lecciones-herramientas1">
                    <div class="herramientas-wrapper">
                      <div class="herramientas">Herramientas</div>
                    </div>
                    <img
                      class="image-8-icon"
                      loading="lazy"
                      alt=""
                      src="./img/image-24@2x.png"
                    />
                  </a>
                </div>
              </div>
              <div class="frame-div">
                <div class="frame-group">
                  <a href="/Tienda" class="tienda-wrapper">
                    <div class="tienda">Tienda</div>
                  </a>
                  <img
                    class="store-solid-1-icon"
                    loading="lazy"
                    alt=""
                    src="./img/storesolid-6.svg"
                  />
                </div>
              </div>
              <div class="profile-image">
                <div class="frame-parent1">
                  <a href="/perfil" class="perfil-wrap  per">
                    <div class="perfil">Perfil</div>
                  </a>
                  <img
                    class="image-15-icon"
                    loading="lazy"
                    alt=""
                    src="./img/image-25@2x.png"
                  />
                </div>
              </div>
            </header> 
          </main>
        </div>
        @yield('contenido')
    </body>
    
</html>
