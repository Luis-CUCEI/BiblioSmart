<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Titulo -->
    <title>BiblioSmart | Inicio</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/index/core-img/favicon.ico') }}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/index/style.css') }}">

</head>

<body>
<!-- ##### Precarga ##### -->
<div class="preloader d-flex align-items-center justify-content-center">
    <div class="circle-preloader">
        <img src="{{ asset('img/index/core-img/compact-disc.png') }}" alt="">
    </div>
</div>

<!-- ##### Header ##### -->
<header class="header-area">
    <!-- Navbar Area -->
    <div class="musica-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container-fluid">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="musicaNav">

                    <!-- Nav brand -->
                    <a href="{{ url('#') }}" class="nav-brand"><img src="{{ asset('img/index/core-img/logo.png') }}"
                                                                    alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="{{ url('#') }}">Inicio</a></li>
                                <li><a href="{{ route('login') }}">Ingresar</a></li>
                                <li><a href="{{ route('register') }}">Registro</a></li>
                                <li><a href="{{ url('#') }}">Contacto</a></li>
                            </ul>

                            <!-- Social Button -->
                            <div class="top-social-info">
                                <a href="{{ url('https://www.facebook.com/udgcucei/') }}">
                                    <i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="{{ url('https://twitter.com/udgcucei?s=17') }}">
                                    <i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="{{ url('https://www.instagram.com/udgcucei/') }}">
                                    <i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->

<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
    <div class="hero-slides owl-carousel">

        <!-- Single Hero Slide -->
        <div class="single-hero-slide d-flex align-items-center justify-content-center">
            <!-- Slide Img -->
            <div class="slide-img bg-img" style="background-image: url({{ asset('img/index/bg-img/bg-1.jpg') }});"></div>
            <!-- Slide Content -->
            <div class="hero-slides-content text-center">
                <h2 data-animation="fadeInUp" data-delay="100ms">Bienvenido a BiblioSmart
                    <span>Bienvenido a BiblioSmart</span></h2>
                <p data-animation="fadeInUp" data-delay="300ms">Consulta de libros.</p>
            </div>
            <!-- Big Text -->
            <h2 class="big-text">BliblioSmart</h2>
        </div>

        <!-- Single Hero Slide -->
        <div class="single-hero-slide d-flex align-items-center justify-content-center">
            <!-- Slide Img -->
            <div class="slide-img bg-img" style="background-image: url({{ asset('img/index/bg-img/bg-2.jpg') }});"></div>
            <!-- Slide Content -->
            <div class="hero-slides-content text-center">
                <h2 data-animation="fadeInUp" data-delay="100ms">CUCEI<span>CUCEI</span></h2>
                <p data-animation="fadeInUp" data-delay="300ms">Biblioteca Virtual Exclusiva.</p>
            </div>
            <!-- Big Text -->
            <h2 class="big-text">CUCEI</h2>
        </div>

        <!-- Single Hero Slide -->
        <div class="single-hero-slide d-flex align-items-center justify-content-center">
            <!-- Slide Img -->
            <div class="slide-img bg-img" style="background-image: url({{ asset('img/index/bg-img/bg-3.jpg') }});"></div>
            <!-- Slide Content -->
            <div class="hero-slides-content text-center">
                <h2 data-animation="fadeInUp" data-delay="100ms">Biblioteca Online <span>Biblioteca Online</span></h2>
                <p data-animation="fadeInUp" data-delay="300ms">
                    Consulta y consigue la informacion de los libros disponibles.</p>
            </div>
            <!-- Big Text -->
            <h2 class="big-text">Biblioteca Virtual</h2>
        </div>

    </div>
    <!-- bg gradients -->
    <div class="bg-gradients"></div>

    <!-- Slide Down -->
    <div class="slide-down" id="scrollDown">
        <h6>Deslizar Abajo</h6>
        <div class="line"></div>
    </div>
</section>
<!-- ##### Hero Area End ##### -->

<!-- ##### About Us Area Start ##### -->
<div class="about-us-area section-padding-100-0 bg-img bg-overlay" style="background-image: url({{ asset('img/index/bg-img/bg-4.jpg') }});" id="about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h2>Informacion</h2>
                    <h6>BliblioSmart consulta unicamente los libros disponibles dentro de CUCEI</h6>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- About Thumbnail -->
            <div class="col-12 col-lg-6">
                <div class="about-thumbnail mb-100">
                    <img src="{{ asset('img/index/bg-img/bg-5.jpg') }}" alt="">
                </div>
            </div>
            <!-- About Content -->
            <div class="col-12 col-lg-6">
                <div class="about-content mb-100">
                    <h4>Biblioteca Virtual - CUCEI</h4>
                    <p>Bienvenido a este espacio virtual donde podrás encontrar un listado de los libros disponibles en
                        la Biblioteca de CUCEI. <br><br> Ademas este espacio te permitira: </p>
                    <p> <img src="{{ asset('img/index/core-img/check.png') }}"> Administrar tus libros. </p>
                    <p> <img src="{{ asset('img/index/core-img/check.png') }}"> Informacion detellada de los libros.</p>
                    <p> <a href="{{ route('login') }}" class="btn musica-btn">ENTRAR</a> O ¿Eres nuevo? entonces
                        <a href="{{ route('register') }}" class="btn musica-btn">Registrate</a> </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-gradients"></div>
<!-- ##### About Us Area End ##### -->

<!-- ##### Upcoming Shows Area Start ##### -->
<div class="upcoming-shows-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h2>Proximos Eventos</h2>
                    <h6>Revisa los proximos eventos que el Centro Universitario de Ciencas Exactas e Ingenierias tiene para ti.</h6>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <!-- Upcoming Shows Content -->
                <div class="upcoming-shows-content">

                    <!-- Single Upcoming Shows -->
                    <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                        <div class="shows-date">
                            <h2>01<span>ENE</span></h2>
                        </div>
                        <div class="shows-desc d-flex align-items-center">
                            <div class="shows-img">
                                <img src="{{ asset('img/index/bg-img/s1.jpg') }}" alt="">
                            </div>
                            <div class="shows-name">
                                <h6>Proximamente</h6>
                                <p>CUCEI</p>
                            </div>
                        </div>
                        <div class="shows-location">
                            <p>Auditorio "X"</p>
                        </div>
                        <div class="shows-time">
                            <p>24:00</p>
                        </div>
                        <div class="buy-tickets">
                            <a href="{{ url('#') }}" class="btn musica-btn">Mas Informacion</a>
                        </div>
                    </div>

                    <!-- Single Upcoming Shows -->
                    <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                        <div class="shows-date">
                            <h2>01<span>ENE</span></h2>
                        </div>
                        <div class="shows-desc d-flex align-items-center">
                            <div class="shows-img">
                                <img src="{{ asset('img/index/bg-img/s2.jpg') }}" alt="">
                            </div>
                            <div class="shows-name">
                                <h6>Proximamente</h6>
                                <p>CUCEI</p>
                            </div>
                        </div>
                        <div class="shows-location">
                            <p>Auditorio "X"</p>
                        </div>
                        <div class="shows-time">
                            <p>24:00</p>
                        </div>
                        <div class="buy-tickets">
                            <a href="{{ url('#') }}" class="btn musica-btn">Mas Informacion</a>
                        </div>
                    </div>

                    <!-- Single Upcoming Shows -->
                    <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                        <div class="shows-date">
                            <h2>01<span>ENE</span></h2>
                        </div>
                        <div class="shows-desc d-flex align-items-center">
                            <div class="shows-img">
                                <img src="{{ asset('img/index/bg-img/s3.jpg') }}" alt="">
                            </div>
                            <div class="shows-name">
                                <h6>Proximamente</h6>
                                <p>CUCEI</p>
                            </div>
                        </div>
                        <div class="shows-location">
                            <p>Auditorio "X"</p>
                        </div>
                        <div class="shows-time">
                            <p>24:00</p>
                        </div>
                        <div class="buy-tickets">
                            <a href="{{ url('#') }}" class="btn musica-btn">Mas Informacion</a>
                        </div>
                    </div>

                    <!-- Single Upcoming Shows -->
                    <div class="single-upcoming-shows d-flex align-items-center flex-wrap">
                        <div class="shows-date">
                            <h2>01<span>ENE</span></h2>
                        </div>
                        <div class="shows-desc d-flex align-items-center">
                            <div class="shows-img">
                                <img src="{{ asset('img/index/bg-img/s4.jpg')}}" alt="">
                            </div>
                            <div class="shows-name">
                                <h6>Proximamente</h6>
                                <p>CUCEI</p>
                            </div>
                        </div>
                        <div class="shows-location">
                            <p>Auditorio "X"</p>
                        </div>
                        <div class="shows-time">
                            <p>24:00</p>
                        </div>
                        <div class="buy-tickets">
                            <a href="{{ url('#') }}" class="btn musica-btn">Mas Informacion</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-gradients"></div>
<!-- ##### Upcoming Shows Area End ##### -->

<!-- ##### Footer Area Start ##### -->
<footer class="footer-area section-padding-100-0">
    <div class="container-fluid">
        <div class="row">
            <!-- Footer Widget Area -->
            <div class="col-12 col-md-6 col-xl-3">
                <div class="footer-widget-area mb-100" align="center">
                        <a href="{{ url('http://www.udg.mx/') }}"><img src="{{ asset('img/index/core-img/udeg.png') }}"
                                                                       alt=""></a>
                        <br> <br> <br> <br>
                        <a href="{{ url('#') }}"> <img src="{{ asset('img/index/core-img/logo2.png') }}" alt=""></a>
                        <p class="copywrite-text"><a href="{{ url('#') }}">
                                Copyright &copy;  <script> document.write(new Date().getFullYear()); </script> </a>
                            Todos los Derechos Reservados. </p>
                </div>
                <div class="footer-widget-area mb-100">

                    <p class="copywrite-text"><a href="{{ url('#') }}"></a> </p>
                </div>
            </div>
            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-4 col-xl-2">
                <div class="footer-widget-area mb-100" align="center">
                        <div class="widget-title">
                            <h4>Extras</h4>
                        </div>
                        <nav>
                            <ul class="footer-nav">
                                <li><a href="{{ url('#') }}">Proximamente</a></li>
                            </ul>
                        </nav>
                </div>
            </div>

            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-4 col-xl-2">
                <div class="footer-widget-area mb-100" align="center">
                        <div class="widget-title">
                            <h4>Links</h4>
                        </div>
                        <nav>
                            <ul class="footer-nav">
                                <li><a href="{{ url('http://www.cucei.udg.mx/') }}">CUCEI</a></li>
                                <li><a href="{{ url('http://escolar.cucei.udg.mx/cescolar/') }}">SIATCE</a></li>
                                <li><a href="{{ url('http://siiauescolar.siiau.udg.mx/wus/gupprincipal.inicio') }}">
                                        SIIAU</a></li>
                                <li><a href="{{ url('http://www.udg.mx/') }}">UdeG</a></li>
                            </ul>
                        </nav>
                </div>
            </div>

            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-4 col-xl-2">
                <div class="footer-widget-area mb-100" align="center">
                        <div class="widget-title">
                            <h4>Social</h4>
                        </div>
                        <nav>
                            <ul class="footer-nav">
                                <li><a href="{{ url('https://www.facebook.com/udgcucei/ ') }}">Facebook</a></li>
                                <li><a href="{{ url('https://twitter.com/udgcucei') }}">Twitter</a></li>
                                <li><a href="{{ url('https://www.instagram.com/udgcucei/') }}">Instagram</a></li>
                            </ul>
                        </nav>
                </div>
            </div>

            <!-- Footer Widget Area -->
            <div class="col-12 col-md-6 col-xl-3">
                <div class="footer-widget-area mb-100" align="center">
                        <a href="{{ url('https://laravel.com/') }}">
                            <img src="{{ asset('img/index/core-img/Laravel.png') }}"
                                 alt="" height="100px" width="300px"></a>
                        <br> <br> <br> <br>
                        <a href="{{ url('https://www.facebook.com/GKMDesigns/') }}">
                            <img src="{{ asset('img/index/core-img/gkm.png') }}" alt="" height="75px" width="75px"></a>
                        <p class="copywrite-text"><a href="{{ url('https://www.facebook.com/GKMDesigns/') }}">
                                Pagina web diseñada por: Luis Infante </a> </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area Start ##### -->

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="{{ asset('js/indexjs/jquery/jquery-2.2.4.min.js') }}"></script>
<!-- Popper js -->
<script src="{{ asset('js/indexjs/bootstrap/popper.min.js') }}"></script>
<!-- Bootstrap js -->
<script src="{{ asset('js/indexjs/bootstrap/bootstrap.min.js') }}"></script>
<!-- All Plugins js -->
<script src="{{ asset('js/indexjs/plugins/plugins.js') }}"></script>
<!-- Active js -->
<script src="{{ asset('js/indexjs/active.js') }}"></script>
</body>

</html>