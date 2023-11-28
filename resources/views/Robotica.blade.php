<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robotica </title>
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
                <h2>Curiosidades de la robotica</h2>
                <p>
                Datos adicionales: <br>Los robots blandos utilizan materiales como polímeros y elastómeros para construir sus cuerpos y sistemas de actuación 
                Por ejemplo, en una línea de producción de teléfonos móviles, los robots blandos pueden ser utilizados para colocar con cuidado los 
                componentes electrónicos en su lugar, como la pantalla, la placa base y la batería. <br>
              Los cobots son capaces de detectar la presencia humana y ajustar su comportamiento en consecuencia, lo que los hace ideales para tareas 
              que requieren una estrecha colaboración entre humanos y robots.Los cobots se utilizan en una amplia gama de industrias, desde la fabricación hasta la atención médica.<br>
            
                </p>
              </div>
  
              <div>
                <h2>Dispensador de agua automatico</h2>
                <p>
                Materiales necesarios:<br>
                  Fuente de voltaje <br>
                  Mini protoboard<br>
                  Jumpers macho macho<br>
                  Sensor ultrasónico HCSR04<br>
                  Bomba de agua 5volts<br>
                  Resistencia 1000 ohms<br>
                  Transistor 2n222<br>
                  Baterias o fuente regulable<br>
                  Concepto de trabajo: El proyecto utiliza un sensor ultrasónico para detectar la presencia de un vaso cerca del bebedero.
                   Cuando se detecta un vaso, el Arduino activa una válvula para dispensar agua automáticamente.
                 </p>
              </div>
              <div>
                <h2>Humanoide Sophia</h2>
                <p>
                Sophia es un robot humanoide desarrollado por la compañía Hanson Robotics, con sede en Hong Kong. Fue diseñada para aprender, adaptarse al comportamiento humano y trabajar de manera satisfactoria con las personas. Sophia ha sido entrevistada en varias ocasiones y ha ganado reconocimiento mundial por sus conductas casi humanas. En octubre de 2017, se convirtió en la primera robot en obtener la ciudadanía saudí, lo que generó controversia sobre los derechos y obligaciones de los robots                </p>
              </div>
  
              <div>
                <h2>Team venezuela</h2>
                <p>
                El equipo venezolano de robótica logró un gran éxito al ganar la medalla de oro en el First Global Challenge Singapur 2023. Este desafío anual, organizado por First Global, busca inspirar a los jóvenes a liderar e innovar en ciencia y tecnología, promoviendo valores como la cooperación y la búsqueda de soluciones a los problemas más urgentes del mundo. En el evento, los participantes exploraron el potencial del hidrógeno como fuente de energía sostenible a través de desafíos de robótica únicos
                 </p>
              </div>
    
            </div>
            <!--Videos parte derecha-->
            <div class="right">
            <div>
            <video class="right miVideo" controls autoplay muted>
              <source src="{{asset('video/robotica_team_venezuela.mp4')}}" type="video/mp4">
            </video>
          </div>

          <div>
            <video class="right miVideo" controls autoplay muted>
              <source src="{{asset('video/sophia.mp4')}}" type="video/mp4">
            </video> 
          </div>

          <div>
            <video class="right miVideo" controls autoplay muted>
              <source src="{{asset('video/robotica.mp4')}}" type="video/mp4">
            </video>
          </div>

          <div>
            <video class="right miVideo" controls autoplay muted>
              <source src="{{asset('video/curiosidad.mp4')}}" type="video/mp4">
            </video> 
          </div>

          <div>
            <video class="right miVideo" controls autoplay muted>
              <source src="{{asset('video/roboticaintro.mp4')}}" type="video/mp4">
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