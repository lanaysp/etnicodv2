@extends('layouts.app-blog')

@section('title')
    Blog
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
          <li><a href="index.html">Home</a></li>
          <li>Blog</li>
        </ol>
        <h2>Artikel</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
            <div class="container">
                <div class="row">
                    @foreach ($blog as $item)
                    <div class="col-md-3 col-sm-6 col-lg-4 item">
                        <a class="blog" href="{{ route('detail-blog',$item->slug) }}">
                        <div class="card item-card card-block">
                            <img class="blog" src="{{ Storage::url($item->photo) }}" alt="Photo of sunset">
                            <div class="container">
                                    <h2 class="item-card-title mt-3 mb-3">{{ $item->name }}</h2>
                                    <p class="item-card-deskripsi mt-3 mb-3">{!! Str::limit($item->description,180) !!}</p>
                                    <a href="{{ route('detail-blog', $item->slug) }}">Baca Selengkapnya</a>
                                    <hr>
                                    <h6 class="item-card-date mt-1 mb-2">{{ $item->created_at }}</h6>

                                </div>
                            </a>
                            </div>
                    </div>
                    @endforeach

                </div>

            </div>

        </div>
    </section>

  </main><!-- End #main -->


@endsection
