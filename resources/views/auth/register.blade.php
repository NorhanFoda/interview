@extends('layouts.auth.auth')
@section('title', 'Register')
@section('content')
<!-- Page Title -->
    <div class="page-title dark-background">
      <div class="container position-relative">
        <h1>Register</h1>
        <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current">Register</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-6">
            <form action="{{ route('register.store') }}" method="POST" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
                @csrf
              <div class="row gy-4">
                <div class="col-md-12">
                  <input type="email" name="email" class="form-control" placeholder="Email" required="">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-12">
                  <input type="password" class="form-control" name="password" placeholder="Password" required="">
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-12">
                  <input type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation" required="">
                    @error('password_confirmation')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your account registered successfully!</div>

                  <button type="submit">Register</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->
        </div>
      </div>

    </section><!-- /Contact Section -->
@endsection