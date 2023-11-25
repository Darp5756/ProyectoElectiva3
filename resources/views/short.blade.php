<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UJGH Media</title>
    <link rel="preload" href="{{ asset('css/short.css') }}" as="style">
    <link rel="stylesheet" href="{{ asset('css/short.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous"
      referrerpolicy="no-referrer" />

  </head>
  <body>
       <!-- Menu -->
    <aside class="sidebar">
      <div class="menu-btn"> 
        <img src="../svg/menu.svg" alt="menu">
      </div>
    </aside>
     <!-- icono Menu -->
    <div id="menu">
      <div class="menu-header">
        <div class="menu-btn">
          <img src="../svg/menu.svg" alt="menu-icon">
        </div>
        <a href="#">
          <img src="" alt="-logo">
        </a>
      </div>
 <!-- contenido del menu -->
      <div class="menu-group">
        <div class="menu-item">
          <img src="../svg/inicio.svg">
          <span>Inicio</span>
        </div>
        <div class="menu-item">
          <img src="../svg/shorts.svg">
          <span>Inteligencia Artificial</span>
        </div>
        <div class="menu-item">
          <img src="../svg/shorts.svg">
          <span>Robotica</span>
        </div>
        <div class="menu-item">
          <img src="../svg/curso.svg">
          <span>Cursos</span>
        </div>
      </div>

      <div class="menu-group">
        <div class="menu-item">
            <img src="../svg/perfil.svg">
            <span>Perfil</span>
          </div>
          <div class="menu-item">
            <img src="../svg/cerrar.svg">
            <span>Cerrar sesion</span>
          </div>
      </div>
    </div>
 <!-- nav debe ir dentro del section para que no haya problema con la particion de los short   -->
    <section>
      <nav>
        <a href="">
          <img src="" alt="-logo">
        </a>
        <h1 class="titulo-nav">YetDi </h1>
      </nav>
 <!-- Slider   -->
     
        <div class="slider">
          <div class="controls">
            <div class="up">
              <i class="fa fa-chevron-up"></i>
            </div>
            <div class="down">
              <i class="fa fa-chevron-down"></i>
            </div>
          </div>
          <!--Titulo y descepcion parte izquierda-->
          <div class="wrapper">
            <div class="left">
              <div>
                <h2>Ingenieria en sistemas</h2>
                <p>
                    La ingeniería en sistemas se enfoca en el diseño, desarrollo, implementación y mantenimiento de sistemas complejos, incluyendo hardware, software y servicios. 
                    Los ingenieros en sistemas se desempeñan en diversas industrias como tecnología, salud, biología, economía, comunicaciones y más. Algunas posiciones comunes son director de tecnología de la información, desarrollador de software, administrador de proyectos y arquitecto de sistemas.
                </p>
              </div>
    
              <div>
                <h2>Inteligencia artificial</h2>
                <p>
                  Es un campo de estudio y desarrollo de tecnologías que buscan crear sistemas y programas capaces de realizar tareas que normalmente requieren de la inteligencia humana. Estos sistemas pueden aprender, razonar, reconocer patrones y tomar decisiones basadas en datos.
                  <br><br>En el campo de la ingeniería en sistemas, la IA tiene diversas aplicaciones y 
                  beneficios. Algunos ejemplos incluyen: Ciberseguridad, Automatización de procesos, Sistemas expertos, 
                  Internet de las cosas (IoT), Optimización de sistemas, Desarrollo web, etc.
                  
                </p>
              </div>
  
              <div>
                <h2>Robotica</h2>
                <p>
                  Es un campo que combina la ingeniería y la tecnología para diseñar, desarrollar y 
                  utilizar robots en diversos entornos y aplicaciones. Los robots son máquinas programables capaces de realizar 
                  tareas de manera autónoma o semiautónoma.<br><br>
                  El papel de un ingeniero en sistemas en la robótica es fundamental para el desarrollo, implementación y 
                  mantenimiento de sistemas robóticos. Los ingenieros en sistemas aplican sus conocimientos en áreas como la electrónica,
                   la informática y la ingeniería de control para diseñar y programar robots que puedan realizar tareas de manera autónoma o semiautónoma.
                </p>
              </div>
    
              <div>
                <h2>Programacion</h2>
                <p>
                  La programación es el proceso de crear un conjunto de instrucciones ordenadas que le indican a una computadora cómo 
                  realizar una tarea específica. En el campo de la ingeniería de sistemas, 
                  los ingenieros utilizan la programación para desarrollar software, automatizar tareas y resolver problemas.
                  Un ingeniero en sistemas utiliza sus conocimientos en programación para diseñar y desarrollar software, 
                  ya sea para aplicaciones móviles, sistemas web, sistemas de control, inteligencia artificial, entre otros. 
                  También se encarga de optimizar el rendimiento de los sistemas, solucionar problemas y mantener el software actualizado.
                </p>
              </div>
            </div>
            <!--Videos parte derecha-->
            <div class="right">
                <div>
                    <video class="right miVideo" controls autoplay muted>
                      <source src="{{asset('video/prueba.mp4')}}" type="video/mp4">
                    </video>
                  </div>

                  <div>
                    <video class="right miVideo" controls autoplay muted>
                      <source src="../video/pruebaa.mp4" type="video/mp4">
                    </video>
                  </div>

                  <div>
                    <video class="right miVideo" controls autoplay muted>
                      <source src="" type="video/mp4">
                    </video>
                  </div>

                  <div>
                    <video class="right miVideo" controls autoplay muted>
                      <source src="" type="video/mp4">
                    </video>
                  </div>

                  
            </div>
          </div>
        </div>

    <!-- Llamado a js -->
    <script src="{{asset('js/slider.js')}}"></script>
    <script src="{{asset('js/menu.js')}}"></script>
    <script src="{{asset('js/videopause.js')}}"></script>

  </body>
</html>