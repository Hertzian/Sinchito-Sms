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
        <div class="bg-info">
            <nav class="navbar container">
                <div class="logo">
                    <a href="{{ url('/') }}"><i class="fas fa-sms"></i> Sinchito</a>
                </div>
                <div class="ham" aria-label="toggle-navigation">
                    <div class="ham-toggle"></div>
                </div>
                <ul class="menu">
                    <li><a href="#features">Caracteristicas</a></li>
                    <li><a href="#gallery">Galería</a></li>
                    <li><a href="#tools">Herramientas</a></li>
                    <li><a href="#contact">Contacto</a></li>
                
                @if (Route::has('login'))
                    @auth
                        <a id="lg-btn" class="btn" href="{{ url('/user') }}">Panel de administración</a>
                    @else
                        <a id="lg-btn" class="btn" href="{{ route('login') }}">Login</a>
                    @endauth
                @elseif(Route::has())
                    @auth
                        <a id="lg-btn" class="btn" href="{{ url('/user') }}">Panel de administración</a>
                    @else
                        <a id="lg-btn" class="btn" href="{{ route('login') }}">Login</a>

                    @endauth
                @endif
                </ul>
            </nav>
        </div>

        {{-- Home --}}
        <section class="section-a bg-white">
            <div class="container">
                <h1 class="secondary">Un <span class="black">servicio</span> que facilita <br><span class="black">Tu Vida.</span></h1>
                <div class="block">
                    <div class="text">
                        <p class="my-5">
                            SMS Sinchito es un servicio para envio de sms por medio de tu pc, que facilita las campañas publicitarias por medio de sms. Es posible desde un simple SMS, hasta el envío automático a toda una lista de contactos. Podrás hacer tantas listas de contactos como desees, podrás hacer plantillas personalizadas para cada uno de tus clientes sin mayor esfuerzo que el hacer una plantilla y ¡Listo!. Porque claro, tambien es posible hacer plantillas personalizadas y tener acceso a ellas cuando tu gustes.
                        </p>
                        <a class="btn mx-2" href="{{ route('register') }}">Registrate</a>
                    </div>
                    <div class="image">
                        <img src="{{ asset('images/section-a.jpg') }}">
                    </div>
                </div>
            </div>
        </section>

        <section class="section-parallax-1 parallax"></section>

        {{-- Features --}}
        <section id="features" class="section-b bg-danger">
            <div class="container">
                <h2>Principales <span class="white">Caracteristicas</span></h2>
                <div id="check" class="block">
                    <div class="image">
                        <img src="{{ asset('images/section-a.jpg') }}" alt="">
                    </div>
                    <div class="text">
                        <div class="block">
                            <div class="icon white"><i class="fas fa-check-circle fa-2x"></i></div>
                            <p>Puedes hacer varias listas de contactos y asignarles un nombre.</p>
                        </div>
                        <div class="block">
                            <div class="icon white"><i class="fas fa-check-circle fa-2x"></i></div>
                            <p>Desde un SMS a un contacto hasta un SMS a toda una lista de contactos.</p>
                        </div>
                        <div class="block">
                            <div class="icon white"><i class="fas fa-check-circle fa-2x"></i></div>
                            <p>Plantillas personalizadas para tus SMS´s.</p>
                        </div>
                        <div class="block">
                            <div class="icon white"><i class="fas fa-check-circle fa-2x"></i></div>
                            <p>Podrás ver que SMS´s has enviado y a que contactos.</p>
                        </div>
                        <div class="block">
                            <div class="icon white"><i class="fas fa-check-circle fa-2x"></i></div>
                            <p>Cuenta con una sección de preguntas frecuentes.</p>
                        </div>
                        <div class="block">
                            <div class="icon white"><i class="fas fa-check-circle fa-2x"></i></div>
                            <p>Agregar saldo con Openpay y PayPal.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Gallery --}}
        <div id="gallery">
            <div class="slider">
                <div class="slide current">
                    <div class="content">
                        <h1>Versátil</h1>
                        <p>
                            Puedes administrar tus datos personales y enviar SMS´s.
                        </p>
                    </div>
                </div>
                <div class="slide">
                    <div class="content">
                        <h1>Organizado</h1>
                        <p>
                            Una lista donde puedes tener todos los contactos que tu quieras.
                        </p>
                    </div>
                </div>
                <div class="slide">
                    <div class="content">
                        <h1>Infinidad de contactos</h1>
                        <p>
                            Puedes hacer cuantas listas desees, y almacenar todos los contactos que quieras.
                        </p>
                    </div>
                </div>
                <div class="slide">
                    <div class="content">
                        <h1>Estandarizado</h1>
                        <p>
                            También es posible guardar tus contactos por medio de archivos .csv
                        </p>
                    </div>
                </div>
                <div class="slide">
                    <div class="content">
                        <h1>Elegante</h1>
                        <p>
                            Es muy fácil acceder a lo que tu desees hacer.
                        </p>
                    </div>
                </div>
            </div>
            <div class="buttons">
                <button id="prev"><i class="fas fa-arrow-left"></i></button>
                <button id="next"><i class="fas fa-arrow-right"></i></button>
            </div>
        </div>
			
        

        {{-- Tools --}}
        <section id="tools" class="section-b bg-info">
            <div class="container">
                <h2>¿Qué <span class="white">herramientas</span> se utilizaron?</h2>
                <div id="tools-check" class="block">
                    <div class="image">
                        <img src="{{ asset('images/section-a.jpg') }}" alt="">
                    </div>
                    <div class="text">
                        <div class="block"><div class="icon warning"><i class="fas fa-check-circle fa-2x"></i></div>
                            <p class="white">Utiliza el servicio para SMS de Sinch.</p>
                        </div>
                        <div class="block"><div class="icon warning"><i class="fas fa-check-circle fa-2x"></i></div>
                            <p class="white">El backend esta elaborado con Laravel.</p>
                        </div>
                        <div class="block"><div class="icon warning"><i class="fas fa-check-circle fa-2x"></i></div>
                            <p class="white">El panel de administración es una plantilla basada en bootstrap con estilos personalizados.</p>
                        </div>
                        <div class="block"><div class="icon warning"><i class="fas fa-check-circle fa-2x"></i></div>
                            <p class="white">Básicamente HTML, CSS y Vainilla JS.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-parallax-2 parallax"></section>

        {{-- Contact --}}
        <section id="contact" class="section-contact bg-warning">
            <div class="container">
                <h2 class="my-5">Contáctame</h2>
                <div id="contact-me" class="block">
                    <div class="text contact p-4 mx-1">
                        <span class="dark">email: </span><a href="mailto:lalo@eduardoaguilar.dev">lalo@eduardoaguilar.dev</a> 
                    </div>
                    <div class="text contact p-4 mx-1">
                        <span class="dark">tel: </span><a href="tel:+523327070095">33-2707-0095</a> 
                    </div>
                </div>
            </div>
        </section>

        <i id="topBtn" onclick="toTop()" class="fas fa-chevron-circle-up fa-5x secondary"></i>

        <footer class="container text bg-info p-3">
            <p class="white">SMS Sinchito | <a href="https://eduardoaguilar.dev/">Eduardo Aguilar</a> &copy; {{ date('Y') }}</p>
        </footer>
    </body>
    <script>
        const menuBtn = document.querySelector('.ham');
        const menuList = document.querySelector('.menu');
        const topBtn = document.getElementById("topBtn");
        const slides = document.querySelectorAll('.slide');
        const next = document.querySelector('#next');
        const prev = document.querySelector('#prev');
        const auto = true;
        const intervalTime = 5000;
        let menuOpen = false;
        let slideInterval;

        window.onscroll = function() {
            scroll()
        };

        // menu
        menuBtn.addEventListener('click', () => {
            if (!menuOpen) {
                menuBtn.classList.add('open');
                menuList.classList.add('open');
                menuOpen = true;
            }else{
                menuBtn.classList.remove('open');
                menuList.classList.remove('open');
                menuOpen = false;

            }
        });

        // scroll button
        function scroll() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                topBtn.style.display = "block";
            } else {
                topBtn.style.display = "none";
            }
        }

        function toTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

        // Slider
        const nextSlide = () => {
            // Get current class
            const current = document.querySelector('.current');
            // Remove current class
            current.classList.remove('current');
            // Check for next slide
            if (current.nextElementSibling) {
                // Add current to next sibling
                current.nextElementSibling.classList.add('current');
            }else{
                // Add current to start
                slides[0].classList.add('current');
            }
            setTimeout(() => current.classList.remove('current'), 200);
        }

        const prevSlide = () => {
            // Get current class
            const current = document.querySelector('.current');
            // Remove current class
            current.classList.remove('current');
            // Check for next slide
            if (current.previousElementSibling) {
                // Add current to prev sibling
                current.previousElementSibling.classList.add('current');
            }else{
                // Add current to start
                slides[slides.length - 1].classList.add('current');
            }
            setTimeout(() => current.classList.remove('current'), 200);
        }

        // Button events
        next.addEventListener('click', e => {
            nextSlide();
            if (auto) {
                clearInterval(slideInterval);
                // Run next slide at interval time
                slideInterval = setInterval(nextSlide, intervalTime);
            }
        });

        prev.addEventListener('click', e => {
            prevSlide();
            if (auto) {
                clearInterval(slideInterval);
                // Run next slide at interval time
                slideInterval = setInterval(nextSlide, intervalTime);
            }
        });

        // Auto slide
        if (auto) {
            // Run next slide at interval time
            slideInterval = setInterval(nextSlide, intervalTime);
        }
    </script>
</html>
