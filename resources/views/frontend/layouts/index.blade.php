<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mapala Plankthos</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('storage/img/logompl.png') }}" rel="icon">
  <link href="{{ asset('storage/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('storage/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('storage/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('storage/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('storage/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('storage/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('storage/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  @vite(['resources/js/app.js'])
  @include('frontend.style')

  <!-- =======================================================
  * Template Name: eBusiness - v4.6.0
  * Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('frontend.layouts.header')

  @yield('header')

  <main id="main">

    @yield('content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('frontend.layouts.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('storage/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('storage/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('storage/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('storage/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('storage/vendor/swiper/swiper-bundle.min.js') }}"></script>

</body>

</html>