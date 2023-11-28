<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YetDi</title>
    <link rel="preload" href="{{ asset('css/short.css') }}" as="style">
    <link rel="stylesheet" href="{{ asset('css/short.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/logo6.jpg') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous"
      referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="{{ asset('assets/bootstrap.min.css') }}">


  </head>
  <body>
       <!-- Menu -->
       <x-menu></x-menu>
 <!-- Slider   -->
     
 <div class="slider">
      <div class="controls">
        <div class="up">
        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"/></svg>

        </div>
        <div class="down">
        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/></svg>

        </div>
      </div>

      <div class="wrapper">
        <div class="left">
          <div>
          <h2>Ingenieria en sistemas</h2>
                <p>
                    La ingeniería en sistemas se enfoca en el diseño, desarrollo, implementación y mantenimiento de sistemas complejos, incluyendo hardware, software y servicios. 
                    Los ingenieros en sistemas se desempeñan en diversas industrias como tecnología, salud, biología, economía, comunicaciones y más. Algunas posiciones comunes son director de tecnología de la información, desarrollador de software, administrador de proyectos y arquitecto de sistemas.
                </p>
          </div>
        </div>
        <div class="right">
          <div>
          </div>

          <div>
          </div>

          <div>
          </div>

          <div>
          </div>

          <div>
                    <video class="right miVideo" controls autoplay >
                      <source src="../video/sistemas.mp4" type="video/mp4">
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