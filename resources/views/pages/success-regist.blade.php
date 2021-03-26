@extends('layouts.app-blog')

@section('title')
    Registrasi Berhasil
@endsection

@section('content')
 <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      {{-- <h1 class="logo mr-auto"><a href="index.html">Arsha</a></h1> --}}
       <a href="/" class="logo mr-auto"><img src="/images/Etnicode.png" alt="" style="width: 100px"></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/#about">About</a></li>
          <li><a href="/#services">Services</a></li>
          <li><a href="/#portfolio">Portfolio</a></li>
          <li><a href="/#team">Team</a></li>
          <li><a href="/#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->


      <a href="#about" class="get-started-btn scrollto">Get Started</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs mb-3">
      <div class="container">


      </div>
    </section><!-- End Breadcrumbs -->

    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

          <div class="section-title">
              <h2>Registrasi Berhasil</h2>
              <img src="/images/brand.png" alt="" style="width: 20%">
          <p>Registrasi berhasil silahkan cek email anda dan verifikasi akun anda. </p>
        </div>


      </div>
    </section>

  </main><!-- End #main -->


@endsection
