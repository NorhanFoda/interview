{{--  <!DOCTYPE html>
<html>
   <head>
      @yield('meta')
      <title>Interview | @yield('title')</title>
      @include('layouts.dashboard.partials.styles')
   </head>

   <body>
      <div class="container">
         <header class="row">
            @include('layouts.dashboard.partials.header')
         </header>

         <div id="main" class="row">
            @yield('content')
         </div>

         <footer class="row">
            @include('layouts.dashboard.partials.footer')
         </footer>
      </div>
   </body>
</html>  --}}

<!DOCTYPE html>
<html lang="en">

<head>
   @yield('meta')
   <title>Register | @yield('title')</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Contact - Moderna Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  @include('layouts.auth.partials.styles')

  <!-- =======================================================
  * Template Name: Moderna
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="contact-page">

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