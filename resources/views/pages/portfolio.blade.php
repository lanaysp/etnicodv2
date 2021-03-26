@extends('layouts.app-blog')

@section('title')
    Portfolio
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
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="/">Home</a></li>
          <li>Portfolio</li>
        </ol>
        <h2>All Portfolio</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Alhamdulillah berkat kekompakan dan komitmen kami dalam membantu pertumbuhan UMKM di Indonesia, kami berhasil memberikan hasil terbaik dalam pengembangan bisnis clients. Berikut beberapa portfolio yang bisa kami hadirkan:</p>
        </div>
            <ul id="portfolio-flters" class="flex-wrap d-lg-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-web">WEBSITE</li>
              <li data-filter=".filter-seo">SEO</li>
              <li data-filter=".filter-desaingrafis">DESAIN GRAFIS</li>
              <li data-filter=".filter-andorid">ANDROID</li>
              <li data-filter=".filter-andorid">EDITING VIDEO</li>
              <li data-filter=".filter-andorid">IKLAN ADS</li>
            </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            @foreach ($portfolios as $item)
            <div class="col-lg-4 col-md-6 portfolio-item {{ $item->kategori }}">
              <div class="portfolio-img"><img src="{{ Storage::url($item->photo) }}" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>{{ $item->name }}</h4>
                <a href="{{ $item->link }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
            @endforeach
        </div>
      </div>
    </section>

  </main><!-- End #main -->


@endsection
