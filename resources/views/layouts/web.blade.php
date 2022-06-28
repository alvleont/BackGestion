<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-T0Q7THS6WL"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('set', {'user_id': '{{Session::getId()}}'});
  gtag('config', 'G-T0Q7THS6WL');
</script>
 <script type="application/ld+json">
 {{$seo}}

    </script>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $title }} - Pharmaceutical Experts SAS</title>
  <meta content="{{$description}}" name="description">
  <meta content="erp,crm,farmacéutico,medicamentos,dispositivos médicos,Colombia,transformación,digital,pymes,historia clínica" name="keywords">
{{$twittercard}}
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#c65054">
<meta name="msapplication-TileColor" content="#c65054">
<meta name="theme-color" content="#c65054">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/assets/vendor_ws/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">

  @livewireStyles



</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:info@pharmaceuticalexperts.com.co">info@pharmaceuticalexperts.com.co</a></i>

      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="https://twitter.com/PharmaceuticalE" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.linkedin.com/company/pharmaceutical-experts" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">


      <a href="{{route('home')}}"><img src="/img/phelogo.svg" alt=""></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{route('home')}}">Home</a></li>
          <li><a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{route('about')}}">Nosotros</a></li>
          <li><a class="{{ request()->routeIs('services') ? 'active' : '' }}" href="{{route('services')}}">Servicios</a></li>


          <li><a class="{{ request()->routeIs('home') ? "class='active'" : '' }}" href="{{route('home')}}">Contáctenos</a></li>
          <li><a href="{{route('filament.pages.dashboard')}}"><i class='bx bxs-dashboard'></i></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  {{ $slot }}
  @stack('modals')

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
 @livewire('sitioweb.listadistribucion')
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Te puede interesar</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('home')}}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('about')}}">Acerca de</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('services')}}">Servicios</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('terms')}}">Terminos de servicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('privacy')}}">Política de manejo de datos personales</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nuestros Servicios</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('innovation')}}">Innovación</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('digital-transformation')}}">Transformación Digital</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://fastclinica.com/" target="blank">FastClínica</a></li>

            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contáctenos</h4>
            <p>
              Calle 19 43G-80<br>
              Medellín, Colombia <br>
              <strong><i class="bi bi-phone"></i></strong> +57 300 929 2209<br>
              <strong><i class="bi bi-envelope-open"></i></strong> info@pharmaceuticalexperts.com.co<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Pharmaceutical Experts SAS</h3>
            <p>Una compañía que transforma digitalmente el futuro de la industria farmacéutica y la salud en Colombia.</p>
            <div class="mt-3 social-links">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>

              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright 2021 <strong><span>Pharmaceutical Experts SAS</span></strong>. Todos los derechos reservados.
      </div>
      <div class="credits">
          </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor_ws/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  <script src="/assets/vendor/purecounter/purecounter.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>
  @livewireScripts

</body>

</html>
