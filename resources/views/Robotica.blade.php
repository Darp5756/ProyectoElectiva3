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
                 Cuando la inteligencia artificial y la robotica se unen se pueden crear grandes cosas aunque este robot es pequeño pero es capaz de grandes cosas.
                </p>
              </div>
  
              <div>
                <h2>asfasfasfasfasfasfasfas</h2>
                <p>
                Cuando la inteligencia artificial y la robotica se unen se pueden crear grandes cosas aunque este robot es pequeño pero es capaz de grandes cosas.

                 </p>
              </div>
    
            </div>
            <!--Videos parte derecha-->
            <div class="right">
            <div>
            <video class="right miVideo" controls autoplay >
              <source src="{{asset('video/robotica.mp4')}}" type="video/mp4">
            </video>
          </div>

          <div>
            <video class="right miVideo" controls autoplay >
              <source src="{{asset('video/sophia.mp4')}}" type="video/mp4">
            </video> 
          </div>

          <div>
            <video class="right miVideo" controls autoplay >
              <source src="{{asset('video/robotica.mp4')}}" type="video/mp4">
            </video>
          </div>

          <div>
            <video class="right miVideo" controls autoplay >
              <source src="{{asset('video/curiosidad.mp4')}}" type="video/mp4">
            </video> 
          </div>

          <div>
            <video class="right miVideo" controls autoplay >
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