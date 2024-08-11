<!DOCTYPE html>
<html lang="en">

<head>
  @yield('meta')
  <title>Home | @yield('title')</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Moderna Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  @include('layouts.app.partials.styles')

  <!-- =======================================================
  * Template Name: Moderna
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
      @include('layouts.app.partials.header')
  </header>

  <main class="main">
      @yield('content')
  </main>

  <footer id="footer" class="footer dark-background">
      @include('layouts.app.partials.footer')
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  @include('layouts.app.partials.scripts')

</body>

</html>