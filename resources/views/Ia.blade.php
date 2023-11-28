<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inteligencia artificial</title>
    <link rel="preload" href="{{ asset('css/short.css') }}" as="style">
    <link rel="stylesheet" href="{{ asset('css/short.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous"
      referrerpolicy="no-referrer" />

  </head>
  <body>
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
          <!--Titulo y descepcion parte izquierda-->
          <div class="wrapper">
            <div class="left">

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
                <h2>Inteligencia artificial y Robotica</h2>
                <p>
                 Cuando la inteligencia artificial y la robotica se unen se pueden crear grandes cosas aunque este robot es pequeño pero es capaz de grandes cosas.
                </p>
              </div>
  
              <div>
                <h2>IA para exposiciones virtuales</h2>
                <p>
                Heygen.com es un sitio web que ofrece una herramienta de inteligencia artificial (IA) llamada HeyGen. Esta herramienta utiliza IA para clonar voces y generar contenido de audio realista. Con HeyGen, los usuarios pueden crear voces sintéticas que suenan como personas reales, lo que puede ser útil en diversas aplicaciones, como doblaje de películas, narración de audiolibros, asistentes de voz y más.
                 </p>
              </div>
              <div>
                <h2>IA para investigaciones</h2>
                <p>
                SciSpace: Un sistema de IA que facilita la comprensión de los documentos académicos. SciSpace permite analizar punto por punto. Solo bastará con resaltar la parte confusa del texto y la IA lo explicará de una manera más comprensible.                </p>
              </div>
  
              <div>
                <h2>Deep Blue</h2>
                <p>
                La IA que derrotó a Kasparov en ajedrez fue el sistema de IBM llamado Deep Blue. En 1997, Deep Blue se enfrentó al campeón mundial de ajedrez Garry Kasparov en una serie de partidas. Después de una intensa competencia, Deep Blue logró ganar la partida decisiva y se convirtió en el primer sistema de IA en derrotar a un campeón mundial de ajedrez en un enfrentamiento oficial
                 </p>
              </div>
    
            </div>
            <!--Videos parte derecha-->
            <div class="right">
            <div>
            <video class="right miVideo" controls autoplay muted>
              <source src="{{asset('video/ia_deep_blue.mp4')}}" type="video/mp4">
            </video>
          </div>

          <div>
            <video class="right miVideo" controls autoplay muted>
              <source src="{{asset('video/IA-articulos.mp4')}}" type="video/mp4">
            </video> 
          </div>

          <div>
            <video class="right miVideo" controls autoplay muted>
              <source src="{{asset('video/inteligencia2.mp4')}}" type="video/mp4">
            </video>
          </div>

          <div>
            <video class="right miVideo" controls autoplay muted>
              <source src="{{asset('video/inteligencia.mp4')}}" type="video/mp4">
            </video> 
          </div>

          <div>
            <video class="right miVideo" controls autoplay muted>
              <source src="{{asset('video/ia.mp4')}}" type="video/mp4">
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