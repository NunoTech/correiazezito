<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WQQXPBESR0"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-WQQXPBESR0');
    </script>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

      <title>Correia Zezito | Vereador</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/site/css/libs.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/site/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/app-geral.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->

  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="fas fa-bars"></i></button>


  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

@include('pages.site._partials.menu')

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
@include('pages.site._partials.capa')
  </section><!-- End Hero -->


  <main id="main">

    <!-- ======= About Section ======= -->
{{--      <section id="about" class="about section-1">--}}
{{--          @include('pages.site._partials.bem-vindo')--}}
{{--      </section><!-- End About Section -->--}}
      <!-- ======= Services Section ======= -->
      <section id="services" class="services">
          @include('pages.site._partials.services')
      </section><!-- End Services Section -->
    <section id="about" class="about section-1">
    @include('pages.site._partials.section1')
    </section><!-- End About Section -->




    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
    @include('pages.site._partials.resume')
    </section><!-- End Resume Section -->




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

      <img width="100%" src="{{ asset('assets/site/img/correia-no-zap-logo.png') }}">
  </a>
  </div>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/site/js/libs.js') }}"></script>
  <script src="{{ asset('assets/site/js/main.js') }}"></script>
  <script src="{{ asset('assets/site/js/custom.js') }}"></script>

  <!-- Template Main JS File -->


</body>

</html>
