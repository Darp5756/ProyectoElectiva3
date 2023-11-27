<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> Cursos</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
<!-- partial:index.partial.html -->
<body>
<div class="containere">
  <aside class="sidebar" style="display: flex;">
  @if (Auth::check())
    <div class="menu-btn">
      <img src="../svg/menu.svg" alt="menu">
    </div>
    @else
    <a class="enlance" href="{{ route('vista.login') }}">Iniciar sesión  </a>
      @endif
    <h1 class="cursoh1" style="justify-content: center; align-items: center; color: white;">Cursos disponibles</h1>
  </aside>
     <!-- icono Menu -->
    <div id="menu">
      <div class="menu-header">
        <div class="menu-btn">
          <img src="../svg/menu.svg" alt="menu-icon">
        </div>
        <a href="#">
          <img src="{{ asset('img/logomenu2.png') }}" alt="Logo" width="130" height="50" alt="-logo">
        </a>
      </div>
 <!-- contenido del menu -->

      <div class="menu-group">
        <div class="menu-item">
          <a class="enlance" href="{{ route('vista.inicio') }}">
            <img src="../svg/inicio.svg">
            <span>Inicio</span>
          </a>
      </div>

        <div class="menu-item">
          <a class="enlance" href="{{ route('vista.artificial') }}">
            <img src="../svg/shorts.svg">
            <span>Inteligencia Artificial</span>
          </a>
        </div>

        <div class="menu-item">
          <a class="enlance" href="{{ route('vista.robotica') }}">
            <img src="../svg/shorts.svg">
            <span>Robotica</span>
          </a>
        </div>

        <div class="menu-item">
          <a class="enlance" href="{{ route('vista.cartas') }}">
            <img src="../svg/curso.svg">
            <span>Cursos</span>
          </a>
        </div>
      </div>

      <div class="menu-group" style="color: white;">
        <div class="menu-item">
            <img src="../svg/perfil.svg">
            <span>Perfil</span>
          </div>

          <div class="menu-item">
          <a class="enlance" href="{{ route('login.logout') }}">
            <img src="../svg/cerrar.svg">
            <span>Cerrar sesion</span>
            </a>
          </div>
      </div>
    </div> 
  </div>
 <!-- nav debe ir dentro del section para que no haya problema con la particion de los short   -->
 
 <div class="container">

	<div class="blob-c">
    <div class="shape-blob"></div>
    <div class="shape-blob one"></div>
    <div class="shape-blob two"></div>
    <div class="shape-blob three"></div>
    <div class="shape-blob four"></div>
    <div class="shape-blob five"></div>
    <div class="shape-blob six"></div>
  </div>

  <section>

  <div class="card" onclick="window.location.href='http://pagina-informativa.test/robotica';" style="cursor: pointer;">
  <img src="{{ asset('img/robotica.jpg') }}" alt="image" />
  <div class="card-content">
    <p>Robotica</p>
    <p>La robótica es una ciencia que se ocupa del diseño, construcción y aplicación de los robots, que son máquinas automáticas con cierto grado de inteligencia.</p>
  </div>
</div>


<div class="card" onclick="window.location.href='http://pagina-informativa.test/IApanel';" style="cursor: pointer;">
  <img src="{{ asset('img/IA.jpg') }}" alt="image" />
  <div class="card-content">
  <p>Inteligencia artificial</p>
        <p>La inteligencia artificial (IA) es la capacidad de las máquinas de realizar tareas que normalmente requieren inteligencia humana, como el reconocimiento de imágenes, el procesamiento del lenguaje natural o la toma de decisiones.</p>
      </div>
</div>


<script src="{{asset('js/menu.js')}}"></script>

</body>
</html>
