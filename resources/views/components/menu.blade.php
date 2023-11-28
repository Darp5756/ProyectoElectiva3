<link rel="stylesheet" href="{{ asset('assets/bootstrap.min.css') }}">

<aside class="sidebar">
      @if (Auth::check())
      <div class="menu-btn"> 
        <img src="../svg/menu.svg" alt="menu">
      </div>
      @else
      <a class="enlance" href="{{ route('vista.login') }}">Iniciar sesión  </a>
      @endif
    </aside>
    
     <!-- icono Menu -->
    <div id="menu">
      <div class="menu-header">
        <div class="menu-btn">
          <img src="../svg/menu.svg" alt="menu-icon">
        </div>
          <img src="{{ asset('img/logomenu2.png') }}" alt="Logo" width="130" height="50" alt="-logo">
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
            <span>Robótica</span>
          </a>
        </div>

        <div class="menu-item">
          <a class="enlance" href="{{ route('vista.cartas') }}">
            <img src="../svg/curso.svg">
            <span>Cursos</span>
          </a>
        </div>
      </div>
      <!--

      <div class="menu-group">
        <div class="menu-item">
            <img src="../svg/perfil.svg">
            <span>Perfil</span>
          </div>
-->
          <div class="menu-item">
           <a class="enlance" href="{{ route('login.logout') }}">
            <img src="../svg/cerrar.svg">
            <span>Cerrar sesión</span>
            </a>
          </div>
      </div>
    </div>
    <section>
      <nav>

        <h1 class="titulo-nav">YetDi </h1>
      </nav>