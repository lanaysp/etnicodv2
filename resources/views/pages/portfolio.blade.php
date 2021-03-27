@extends('layouts.app-blog')

@section('title')
    Portfolio
@endsection

@section('content')


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

                 <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
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
