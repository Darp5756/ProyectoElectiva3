<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="preload" href="{{ asset('css/sesion.css') }}" as="style">
    <link rel="stylesheet" href="{{ asset('css/sesion.css') }}">
</head>
<body>
<section>
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('img/logoG.jpg') }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
       
    </a><span>YetDi</span>
  </div>
</nav>
    <div class="form-division"> <!--Clase de la division del formulario-->
        <div class="form-crear">
            <form name="form" class="mi-form" action="{{route('registro.guardar')}}" method="POST"> @csrf
                <div class="login-welcome-row">
                    <h1>Crea tu cuenta &#x1F44F;</h1>
                </div>
                <div class="sociales-row">
                    <a href="#" title="Use Google">
                        <img src="{{ asset('img/logoG.jpg') }}" alt="Google">
                        Registrate con Google
                    </a>
                    <a href="#" title="Use Apple">
                        <img src="{{ asset('img/logoA.jpg') }}" alt="Apple">
                        Registrate con Apple
                    </a>
                </div>
                <div class="divider">
                    <span class="divider-line"></span>
                    Or
                    <span class="divider-line"></span>
                </div>
                <div class="text-field">
                    <label for="email">Usuario:
                        <input type="text" id="usuario" name="usuario" autocomplete="off" placeholder="Tu Usuario"
                            required>
                            @error('usuario')
                            {{ $message }}
                            @enderror
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                            <path d="M16 12v1.5a2.5 2.5 0 0 0 5 0v-1.5a9 9 0 1 0 -5.5 8.28"></path>
                        </svg>
                    </label>
                </div>
                <div class="text-field">
                    <label for="password">Password:
                        <input id="password" type="password" name="clave" placeholder="Tu Password" title="Minimo 6 caracteres 
                                                        Debe contener 1 letra y 1 numero"
                            pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$" required>
                            @error('clave')
                            {{ $message }}
                            @enderror
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z">
                            </path>
                            <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0"></path>
                            <path d="M8 11v-4a4 4 0 1 1 8 0v4"></path>
                        </svg>
                    </label>
                </div>
                
                <button class="my-form__button" type="submit">
                    Registrarse
                </button>
                <div class="my-form__actions">
                    <div class="my-form__signup">
                        <a href="{{ route('vista.login') }}" title="Login">
                            Login
                        </a>
                    </div>
                </div>
            </form>
        </div>
        
        <div class="info-side">
            <img src="../img/ujgh.jpg" alt="Mock" class="mockup" />
            <div class="welcome-message">
                <h2> YetDi 👋</h2>
                <p>
                    Bienvenido a nuestra plataforma de videos educativos. Luego de registrarte, encontrarás una amplia gama de videos cortos
                    pero con un enfoque educativo en temas como robótica e inteligencia artificial.
                  
                </p>
                <br>
                <h2>Nuestas redes sociales</h2>
                <ul>
                    <li class="item">
                      <a href="https://www.instagram.com/infoujgh/" target="_blank">
                        <i class="fa-brands fa-instagram icon"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></i>
                      </a>
                    </li>
                    <li class="item">
                      <a href="https://api.whatsapp.com/send?phone=584126842016" target="_blank">
                        <i class="fa-brands fa-WhatsApp icon"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg></i>
                      </a>
                    </li>
                    <li class="item">
                      <a href="https://www.facebook.com/infoujgh" target="_blank">
                        <i class="fa-brands fa-youtube icon"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg></i>
                      </a>
                    </li>
                  </ul>
            </div>
        </div>
    </div>

</body>

</html>