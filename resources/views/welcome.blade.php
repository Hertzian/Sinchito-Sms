<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('images/favicon.ico') }}">
        <title>SmsSinchito | Bienvenido - Welcome </title>
        <link rel="stylesheet" href="{{ asset('css/frontend/style.css') }}">
        <script src="https://kit.fontawesome.com/bc09df0ab2.js" crossorigin="anonymous"></script>


    </head>
    <body>
        <div class="navbar-color">
            <nav class="navbar">
                <div class="logo">
                    <a href="{{ url('/') }}"><i class="fas fa-sms"></i> Sinchito</a>
                </div>
                <ul class="menu">
                    <li><a href="#caracteristicas">Caracteristicas</a></li>
                    <li><a href="#herramientas">Herramientas</a></li>
                    <li><a href="#especificaciones">Especificaciones</a></li>
                    <li><a href="#paquetes">Paquetes</a></li>
                    <li><a href="#caracteristicas">Caracteristicas</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
                @if (Route::has('login'))
                    @auth
                        <a class="btn" href="{{ url('/user') }}">Panel de administración</a>
                    @else
                        <a class="btn" href="{{ route('login') }}">Login</a>
                    @endauth
                @elseif(Route::has())
                    @auth
                        <a class="btn" href="{{ url('/user') }}">Panel de administración</a>
                    @else
                        <a class="btn" href="{{ route('login') }}">Login</a>

                    @endauth
                @endif
            </nav>
        </div>

        <section class="section-a">
            <div class="container">
                <div class="block">
                    <div class="text">
                        <h2>Un <span>servicio</span> que facilita <br><span>Tu Vida.</span></h2>
                        <p>
                            SMS Sinchito es un servicio para envio de sms por medio de tu pc, que facilita las campañas publicitarias por medio de sms. Es posible desde un simple SMS, hasta el envío automático a toda una lista de contactos. Podrás hacer tantas listas de contactos como desees, podrás hacer plantillas personalizadas para cada uno de tus clientes sin mayor esfuerzo que el hacer una plantilla y ¡Listo!. Porque claro, tambien es posible hacer plantillas personalizadas y tener acceso a ellas cuando tu gustes.
                        </p>
                        <a class="btn" href="#">Crea tu guenta gratis</a>
                    </div>
                    <div class="image">
                        <img src="{{ asset('images/section-a.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="section-b">
            <div class="container">
                <h2>¿Con qué está <span>realizado</span>?</h2>
                <div class="block">
                    <div class="image">
                        <img src="{{ asset('images/section-a.jpg') }}" alt="">
                    </div>
                    <div class="text">
                        <div class="block inside">
                            <div class="icon white">
                                <i class="fas fa-check-circle fa-2x"></i>
                            </div>
                            <p>Su API principal, la que se encarga de los SMS's en sí es con Sinch</p>
                        </div>
                        <div class="block inside">
                            <div class="icon white">
                                <i class="fas fa-check-circle fa-2x"></i>
                            </div>
                            <p>El backend principalmente esta conformado con Laravel</p>
                        </div>
                        <div class="block inside">
                            <div class="icon white">
                                <i class="fas fa-check-circle fa-2x"></i>
                            </div>
                            <p>El panel de administración es una plantilla basada en bootstrap</p>
                        </div>
                        <div class="block inside">
                            <div class="icon white">
                                <i class="fas fa-check-circle fa-2x"></i>
                            </div>
                            <p>Básicamente HTML, CSS y Vainilla JS</p>
                        </div>
                    </div>
                </div>
                    
            </div>
        </section>

        <section class="section-c">

        </section>
    </body>
</html>
