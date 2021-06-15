<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @yield('metasTag')
    <meta charset="UTF-8">
    <meta name="author" content="Corria Zezito - Vereador de Feira de Santana">
    <meta
        name="Vereador Correia Zezito - https://www.correiazezito.com.br"
        content="feira de santana, feira, feira santana, micareta, micareta de feira de santana, prefeitura de feira, feiradesantana, noticias feira de santana, Camara de vereadores, Correia Zezito, Vereadores de Feira de santana, noticias de feira, politica feira, politica de feira de santana">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="index, no follow">
    <meta name="googlebot" content="all">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="{{ asset('assets/blog/css/libs.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/blog/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/app-geral.css') }}" rel="stylesheet">    <!-- Template Main CSS File -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WQQXPBESR0"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-WQQXPBESR0');
    </script>
<body>

<!-- ======= Mobile nav toggle button ======= -->

<button type="button" class="mobile-nav-toggle d-xl-none"><i class="fas fa-bars"></i></button>


<!-- ======= Header ======= -->
<header id="header" class="d-flex flex-column justify-content-center">

    @include('pages.blog._partials.menu')

</header><!-- End Header -->

<!-- ======= Hero Section ======= -->


<img src="{{url('assets/blog/img/hero-bg.jpg')}}" width="100%">


<main id="main">
@yield('content')

<!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        @include('pages._partials.contato')
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    @include('pages._partials.footer')
</footer><!-- End Footer -->

<a href="#" class="back-to-top bg-success"><i class="fas fa-4x text-white fa-arrow-up"></i></a>
<div class="fixed-bottom col-5 col-lg-2 col-sm-4 col-md-2 col-lg-2 mb-3 ml-3 text-success">

    <a href="https://api.whatsapp.com/send?phone=5575981222793&text=Como%20podemos%20ajudar?" target="_blank">

        <img width="100%" src="{{ asset('assets/blog/img/correia-no-zap-logo.png') }}">
    </a>
</div>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/blog/js/libs.js') }}"></script>
<script src="{{ asset('assets/blog/js/main.js') }}"></script>

<!-- Template Main JS File -->


</body>

</html>
