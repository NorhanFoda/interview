<div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <a href="index.html" class="logo d-flex align-items-center">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="{{ asset('assets/img/logo.png') }}" alt=""> -->
      <h1 class="sitename">Moderna</h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="/" class="active">Home</a></li>
        <li><a href="">Team</a></li>
        @guest
          <li><a href="{{ route('register.form') }}">Register</a></li>
        @endguest
        @auth
          <li><a href="{{ route('logout') }}">Logout</a></li>
        @endauth
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

  </div>