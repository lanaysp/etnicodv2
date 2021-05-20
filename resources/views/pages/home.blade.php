@extends('layouts.app')

@section('title')
    Etnicode Digital Solution
@endsection

@push('addon-style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<script data-ad-client="ca-pub-9636385806961771" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<meta name="google-site-verification" content="boIYHrhCDtpsq4oBjvBQZRRBw5yEUJyDft8SH8HrgNI" />
@endpush

@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Go Digital Dengan Website Profesional</h1>
          <h2>Mulai Nikmati Kemudahan Membuat Website Dengan Cepat, Hemat & Profesional Bersama Etnicode Digital Solution</h2>
          <div class="d-lg-flex">
            <a href="#about" class="btn-get-started scrollto">Hubungi Tim Etnicode</a>
            <a href="https://youtu.be/wzIc96oRWhY" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Lihat Video <i class="icofont-play-alt-2"></i></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="/images/ilustrasi/hero.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Suport Section ======= -->
   <section id="cliens" class="cliens section-bg">
    <div class="container" >
        <div class="row" data-aos="zoom-in">
                @foreach ($suports as $suport)
                    <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <a href="{{ $suport->link }}">
                            <img src="{{ Storage::url($suport->photo) }}" class="img-fluid" alt="{{ $suport->name }}">
                        </a>
                    </div>
                @endforeach
        </div>
    </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Memiliki website adalah solusi yang tepat agar bisnis anda
              lebih mudah ditemukan jutaan orang diseluruh dunia. Inilah alasannya:
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Bisnis anda bisa diakses calon customer diseluruh dunia</li>
              <li><i class="ri-check-double-line"></i> Market lebih spesifik bisa disesuikan dengan sangat mudah</li>
              <li><i class="ri-check-double-line"></i> Hemat promosi tanpa harus sewa iklan hingga jutaan rupiah</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              <b>Etnicode Digital Solution</b> merupakan layanan profesional Jasa Pembuatan Website dengan tampilan modern
              dan responsive yang siap membantu bisnis anda online dengan mudah dan cepat.
              Kami melayani berbagai macam pembuatan website, seperti website sekolah, website perusahaan,
              website toko online, website berita, hingga custom website sesuai kebutuhan anda.
            </p>
            <a href="/#contact" class="btn-learn-more scrollto">Hubungi Kami</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Kini anda bisa merasakan mudahnya membuat <strong>Website Profesional SEO Friendly</strong></h3>
              <p>
                Etnicode Solution berkomitmen penuh membantu UMKM naik kelas dengan Go Digital. Berikut 3 alasan kenapa harus menggunakan layanan Etnicode:
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-toggle="collapse" class="collapse" href="#accordion-list-1 "><span>01</span> Proses Cepat Harga Terjangkau<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                    <p>
                      Proses pengerjaan cepat dan akurat dengan tetap memperhatikan kualitas situs web seperti tampilan nyaman, loading cepat dan SEO Friendly. Anda bisa membuat website keren dengan harga terjangkau.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#accordion-list-2" class="collapsed"><span>02</span> Dukungan Dan Pemeliharaan Situs Web <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                    <p>
                      Tim teknis Etnicode akan menjaga dan membantu situs web anda tetap prima dan terus bisa diakses 24 jam non stop. Anda cukup bersantai biarkan kami yang mengerjakan website anda.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#accordion-list-3" class="collapsed"><span>03</span> Free Konsultasi Sebelum Order <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                    <p>
                      Konsultasikan kebutuhan website bisnis anda bersama kami. Tim Etnicode dengan senang hati memberikan solusi terbaik untuk bisnis anda agar bisa lebih cepat berkembang melalui digital khususnya website.
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img w-75" style='background-image: url("/images/ilustrasi/plan.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="/images/ilustrasi/analis.png" class="img-fluid w-75" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>Bagaimana Etnicode bisa sukses membantu pertumbuhan bisnis anda?</h3>
            <p class="font-italic">
              Kami akan berikan keahlian terbaik dibidang yang kami kuasai untuk bisa diterapkan dalam
              pengembangan bisnis anda:
            </p>

            <div class="skills-content">

              <div class="progress">
                <span class="skill">JASA PEMBUATAN WEBSITE <i class="val">98%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="98"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">JASA ARTIKEL WEBSITE <i class="val">95%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">JASA SEO WEBSITE <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">JASA DESAIN GRAFIS <i class="val">87%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Sebagai penyedia layanan Jasa Profesional, Etnicode Solution berusaha memberikan keahlian terbaik untuk ikut kontribusi membangun bisnis anda menjadi lebih maksimal.
            Gunakan layanan Etnicode sesuai kebutuhan bisnis anda dan rasakan mudahnya scale up melalui kekuatan digital:.</p>
        </div>

        <div class="row mb-3">
          <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href="">Jasa Pembuatan Website</a></h4>
              <p>Etnicode melayani jasa pembuatan berbagai macam website dari web custom dan CMS Wordpress dengan tampilan profesional harga terjangkau.</p>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-search"></i></div>
              <h4><a href="">Jasa Artikel Website</a></h4>
              <p>Jangan sampai sudah punya website tapi malah tidak pernah ngonten sama sekali. Daripada web nganggur, gunakan layanan artikel website kami. Website anda akan dikelola dengan baik.</p>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-image"></i></div>
              <h4><a href="">Jasa SEO Website</a></h4>
              <p>Website anda susah menempati Halaman Satu Google? Gunakan Jasa SEO Web Etnicode agar situs anda lebih cepat nangkring di Halaman Pertama Mesin Pencari.</p>
            </div>
          </div>

        </div>
        <div class="row">
           <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-android"></i></div>
              <h4><a href="">Jasa Desain Grafis</a></h4>
              <p>Etnicode menawarkan Jasa Desain Grafis seperti Logo, Banner, Katalog Produk, Konten Marketing dll dengan tampilan profesional yang siap membantu bisnis anda lebih mudah bersaing dengan kompetitor.</p>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-movie-play"></i></div>
              <h4><a href="">Jasa Editing Video</a></h4>
              <p>Bisnis anda membutuhkan video dokumenter ataupun promosi? Jangan khawatir, serahkan dilayanan Etnicode, kami siap membantu citra bisnis anda dikenal lebih profesional</p>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href="">Online Courses</a></h4>
              <p>Anda lebih tertarik mempelajari dunia website sendiri? Gabung di Program Online Courses Etnicode. Anda bisa mendapat ilmu dari pengalaman tim Etnicode dalam mengelola website.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3>Etnicode Digital Solution</h3>
            <p> Diera modern serba digital seperti sekarang ini, jika anda tidak mampu menjangkau pasar yang lebih luas dengan cara memanfaatkan website, kemungkinan besar peluang bangkrut anda semakin dekat.
              Hindari hal tersebut dengan menggunakan Layanan Profesional Etnicode.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle scrollto" href="{{ route('bundle') }}">Paket Langganan Etnicode</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Alhamdulillah berkat kekompakan dan komitmen kami dalam membantu pertumbuhan UMKM di Indonesia, kami berhasil memberikan hasil terbaik dalam pengembangan bisnis clients. Berikut beberapa portfolio yang bisa kami hadirkan:</p>
        </div>
            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link" id="filter-web-tab" data-toggle="pill" href="#filter-web" role="tab" aria-controls="filter-web" aria-selected="true">Website</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="filter-seo-tab" data-toggle="pill" href="#filter-seo" role="tab" aria-controls="filter-seo" aria-selected="false">Seo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="filter-desaingrafis-tab" data-toggle="pill" href="#filter-desaingrafis" role="tab" aria-controls="filter-desaingrafis" aria-selected="false">Desain Grafis</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="filter-editing-video-tab" data-toggle="pill" href="#filter-editing-video" role="tab" aria-controls="filter-editing-video" aria-selected="false">Video Editing</a>
            </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                @foreach ($portfolios as $item)
                <div class="tab-pane fade" id="{{ $item->kategori }}" role="tabpanel" aria-labelledby="{{ $item->kategori }}-tab">
                    <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="portfolio-img"><img src="{{ Storage::url($item->photo) }}" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                        <h4>{{ $item->name }}</h4>
                        <a href="{{ $item->link }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                    </div>
                </div>
                @endforeach
            </div>

      </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Etnicode terus meningkatkan skill dalam bidang teknologi digital untuk membantu kemajuan umkm di Indonesia, percayakan bersama kami. Anda cukup fokus meningkatkan omset dan asset perusahaan anda:</p>
        </div>

        <div class="row">
            {{-- <div class="col-12"> --}}
              {{-- <div id="team" class="owl-carousel"> --}}
            @foreach ($teams as $team)
            <div class="col-lg-6 mb-2">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="{{ Storage::url($team->photo) }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>{{ $team->name }}</h4>
                <span>{{ $team->jabatan }}</span>
                <div class="social">
                    <a href="{{ $team->wa }}"> <i class="ri-whatsapp-fill"></i> </a>
                  <a href="{{ $team->fb }}"><i class="ri-facebook-fill"></i></a>
                  <a href="{{ $team->ig }}"><i class="ri-instagram-fill"></i></a>
                  <a href="{{ $team->git }}"> <i class="ri-github-fill"></i> </a>
                </div>
              </div>
            </div>
        </div>
            @endforeach
        {{-- </div> --}}
    </div>
</div>

      </div>
    </section><!-- End Team Section -->

     <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pricing</h2>
          <p>Mulai kesuksesan di dunia online dengan Layanan Profesional Etnicode. Kami menyediakan beragam macam layanan yang siap membantu pertumbuhan bisnis anda. Silahkan pilih jenis layanan kami yang paling sesuai dengan kebutuhan:</p>
        </div>

        <div class="row">


          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>JASA PEMBUATAN WEBSITE</h3>
              <h4><sup></sup><span>Free Konsultasi</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Toko Online</li>
                <li><i class="bx bx-check"></i> Perusahaan</li>
                <li><i class="bx bx-check"></i> Portal Berita</li>
                <li><i class="bx bx-check"></i> Porftolio</li>
                <li><i class="bx bx-check"></i> Membership</li>
                <li><i class="bx bx-check"></i> Korporasi</li>
                <li><i class="bx bx-check"></i> Agen Biro Wisata</li>
                <li><i class="bx bx-check"></i> Rumah Sakit</li>
                <li><i class="bx bx-check"></i> Custom Sesuai Kebutuhan</li>

              </ul>
              <a href="https://bit.ly/etnicodewebsite" class="buy-btn">Hubungi Etnicode</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>JASA PENULISAN ARTIKEL WEBSITE</h3>
              <h4><sup></sup><span>Free Konsultasi</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Artikel Product</li>
                <li><i class="bx bx-check"></i> Artikel Blog</li>
                <li><i class="bx bx-check"></i> Artikel Mingguan</li>
                <li><i class="bx bx-check"></i> Artikel Bulanan</li>
                <li><i class="bx bx-check"></i> Artikel Tahunan</li>
                <li><i class="bx bx-check"></i> Artikel Kontrak Panjang</li>
                <li><i class="bx bx-check"></i> Artikel Backlink</li>
                <li><i class="bx bx-check"></i> Diskusi Zoom Meeting</li>
                <li><i class="bx bx-check"></i> Konsultasi Via Whatsapp</li>
              </ul>
              <a href="http://bit.ly/etnicodeartikelweb" class="buy-btn">Hubungi Etnicode</a>
            </div>
          </div>

         <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>JASA SEO WEBSITE PROFESIONAL</h3>
              <h4><sup></sup><span>Free Konsultasi</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> SEO Web Sekali Order</li>
                <li><i class="bx bx-check"></i> SEO Web Bulanan</li>
                <li><i class="bx bx-check"></i> SEO Web Tahunan</li>
                <li><i class="bx bx-check"></i> SEO Web Kontrak Panjang</li>
                <li><i class="bx bx-check"></i> SEO Web Sesuai Kebutuhan</li>
                <li><i class="bx bx-check"></i> E-Courses SEO Website</li>
                <li><i class="bx bx-check"></i> Garansi Halaman 1 Google</li>
                <li><i class="bx bx-check"></i> Diskusi Zoom Meeting</li>
                <li><i class="bx bx-check"></i> Konsultasi Via Whatsapp</li>

              </ul>
              <a href="https://bit.ly/etnicodeseoweb" class="buy-btn">Hubungi Etnicode</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>JASA DESAIN GRAFIS</h3>
              <h4><sup></sup><span>Free Konsultasi</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Desain Logo</li>
                <li><i class="bx bx-check"></i> Desain Kartu Nama</li>
                <li><i class="bx bx-check"></i> Desain Kartu Undangan</li>
                <li><i class="bx bx-check"></i> Desain Banner</li>
                <li><i class="bx bx-check"></i> Desain Produk</li>
                <li><i class="bx bx-check"></i> Desain Poster</li>
                <li><i class="bx bx-check"></i> Desain Kemasan</li>
                <li><i class="bx bx-check"></i> Desain Konten Marketing</li>
                <li><i class="bx bx-check"></i> Desain Sesuai Kebutuhan</li>
              </ul>
              <a href="https://bit.ly/etnicodedesain" class="buy-btn">Hubungi Etnicode</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>JASA EDITING VIDEO</h3>
              <h4><sup></sup><span>Free Konsultasi</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Video Opening</li>
                <li><i class="bx bx-check"></i> Video Online Courses</li>
                <li><i class="bx bx-check"></i> Video Vlog Youtube</li>
                <li><i class="bx bx-check"></i> Video Perpisahan Sekolah</li>
                <li><i class="bx bx-check"></i> Video Dokumentasi Wisuda</li>
                <li><i class="bx bx-check"></i> Video Podcast</li>
                <li><i class="bx bx-check"></i> Video Review Produk</li>
                <li><i class="bx bx-check"></i> Video Iklan Produk</li>
                <li><i class="bx bx-check"></i> Edit Video Sesuai Kebutuhan</li>
              </ul>
              <a href="https://bit.ly/etnicodeeditorvideo" class="buy-btn">Hubungi Etnicode</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>ONLINE COURSES</h3>
              <h4><sup></sup><span>Free Konsultasi</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Toko Online Profesional</li>
                <li><i class="bx bx-check"></i> Kuliah SEO Online</li>
                <li><i class="bx bx-check"></i> Studi Kasus Web Pasti Bisa</li>
                <li><i class="bx bx-check"></i> Website Membership</li>
                <li><i class="bx bx-check"></i> Website Replika</li>
                <li><i class="bx bx-check"></i> Web Affiliate & Dropshipper</li>
                <li><i class="bx bx-check"></i> Sekali Daftar</li>
                <li><i class="bx bx-check"></i> Free Update Materi</li>
                <li><i class="bx bx-check"></i> Group Premium Member</li>
              </ul>
              <a href="http://bit.ly/etnicodeonlinecourses" class="buy-btn">Hubungi Etnicode</a>
            </div>
          </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>Berikut pertanyaan yang sering kami terima saat melayani clients dari berbagai bidang bisnis. Sebelum anda terhubung dengan tim Etnicode, pastikan anda sudah mencari jawaban melalui FAQ yang sudah kami sediakan:</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">Apa aja layanan yang disediakan Etnicode? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                <p>
                  Etnicode memiliki berbagai macam layanan seperti Jasa Pembuatan Website Profesional, Jasa Desain Grafis, Jasa SEO Website, Jasa Pembuatan Aplikasi Android, Jasa Iklan Google Ads, dan masih banyak layanan lainnya yang akan mempermudah bisnis anda bertumbuh dengan cepat diera digital.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Apakah bisa membuat website sesuai kebutuhan bisnis saya? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                <p>
                  Bisa. Kami siap membantu bisnis anda segera Go Online dengan tampilan profesional dan responsive. Kami bisa membantu anda membuatkan website toko online, sekolah, kesehatan, portfolio, jasa dan lain-lain.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Bagaimana sistem pemesanannya jika saya ingin menggunakan Jasa Etnicode? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                <p>
                  Cukup mudah dilakukan. Anda tinggal menyesuaikan kebutuhan anda seperti ingin membuat website apa, atau desain apa dan lain-lain, kemudian siapkan detail data diri anda seperti nama dan alamat, dan terakhir hubungi kontak resmi Etnciode, kami akan segera merespon pesan anda.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">Apa saja yang harus saya siapkan jika menggunakan layanan Etnicode? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                <p>
                  Yang harus kalian siapkan pertama kali ialah detail data diri anda seperti nama lengkap, alamat lengkap, email aktif, nomor telp/whatsapp. Selanjutnya bisa menyusul setelah anda terhubung langsung dengan tim Etnicode di whatsapp atau telegram.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">Berapa lama pembuatan website sampai online dan siap digunakan? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                <p>
                  Untuk waktu proses yang dibutuhkan, kami akan menyesuaikan dengan website apa yang akan anda buat. Bisa cepat bisa juga lebih lambat, semua tergantung website yang akan dikerjakan. Oleh karena itu, silahkan langsung konsultasikan melalui whatsapp Etnicode.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-6" class="collapsed">Apakah saya boleh tetap konsultasi setelah pemesanan website selesai? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-6" class="collapse" data-parent=".faq-list">
                <p>
                  Boleh saja, anda bisa konsultasi gratis bersama tim Etnicode walaupun website anda sudah jadi dan digunakan. Kami akan senang sekali jika anda menjaga komunikasi dengan tim Etnicode Indonesia.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Sudah siap Scale Up bisnis anda dengan kekuatan Digital? Kini saatnya anda menjadi terdepan dari kompetitor, siapkan kebutuhan anda dan konsultasikan bersama tim Etnicode dibawah ini dengan mencantumkan nama dan alamat domisili: </p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Etnicode Digital Solution, Jl. P. Syarif No.36, RT.02/RW.01, Rw. II, Saripan, Kec. Jepara, Kabupaten Jepara, Jawa Tengah 59414</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>etnicode@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>0822-6000-0513 | Muhamad Anik</p>
              </div>
             <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7926.834488057037!2d110.67277622761559!3d-6.594952300000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e711fc844afa0b7%3A0x32e2b44e2cb945fd!2sEtnicode%20Media%20Solution!5e0!3m2!1sid!2sid!4v1613206048582!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">

            <form role="form" class="php-email-form">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Nama Anda</label>
                  <input type="text" name="name" class="form-control" id="wa_name" name="name" required="" type="text" value=''/>
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Email Anda</label>
                  <input type="email" class="form-control" name="email" id="wa_email" name="email" required="" type="email" value=''/>
                  <div class="validate"></div>
                </div>
                 <div class="form-group col-md-12">
                  <label for="name">Kebutuhan Anda</label>
                  <select class="form-control"id="wa_select" required>
                      <option hidden='hidden' selected='selected' value='default'>-----Pilih Kebutuhan Anda-----</option>
                      <option value='JASA PEMBUATAN WEBSITE'>JASA PEMBUATAN WEBSITE</option>
                      <option value='JASA ARTIKEL WEBSITE'>JASA ARTIKEL WEBSITE</option>
                      <option value='JASA SEO WEBSITE'>JASA SEO WEBSITE</option>
                      <option value='JASA DESAIN GRAFIS'>JASA DESAIN GRAFIS</option>
                      <option value='JASA EDITING VIDEO'>JASA EDITING VIDEO</option>
                      <option value='ONLINE COURSES'>DAFTAR ONLINE COURSES</option>
                  </select>
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Catatan Tambahan</label>
                <textarea id='wa_textarea' class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
              <div class="text-center"><a class="send_form btn btn btn-outline-primary btn-rounded col-12" href="javascript:void" type="submit" title="Send Message">Kirim Pesan</a></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->


@endsection
@push('addon-script')
{{-- <script src="jquery.min.js"></script> --}}
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script>
   $(document).on('click','.send_form', function(){
var input_blanter = document.getElementById('wa_email');

/* Whatsapp Settings */
var walink = 'https://web.whatsapp.com/send',
    phone = '6282260000513',
    walink2 = 'Hallo Etnicode, Saya Ingin Konsultasi, berikut data diri saya: ',
    text_yes = 'Terkirim.',
    text_no = 'Isi semua Formulir lalu klik Send.';

/* Smartphone Support */
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
var walink = 'whatsapp://send';
}

if("" != input_blanter.value){

 /* Call Input Form */
var input_select1 = $("#wa_select :selected").text(),
    input_name1 = $("#wa_name").val(),
    input_email1 = $("#wa_email").val(),
    input_textarea1 = $("#wa_textarea").val();

/* Final Whatsapp URL */
var blanter_whatsapp = walink + '?phone=' + phone + '&text=' + walink2 + '%0A%0A' +
    'Name : ' + input_name1 + '%0A' +
    'Email : ' + input_email1 + '%0A' +
    'Kebutuhan : ' + input_select1 + '%0A' +
    'Catatan Tambahan : ' + input_textarea1 + '%0A';

/* Whatsapp Window Open */
window.open(blanter_whatsapp,'_blank');
document.getElementById("text-info").innerHTML = '<span class="yes">'+text_yes+'</span>';
} else {
document.getElementById("text-info").innerHTML = '<span class="no">'+text_no+'</span>';
}
});

  </script>

  <script>
       var owl = $('#support');
            owl.owlCarousel({
                loop:true,
                autoplay:true,
                autoplayTimeout:2000,
                autoplayHoverPause:true,
                responsive: {
            0: {
              items: 4
            },
            600: {
              items: 6
            },
            1000: {
              items: 12
            }
          }
            });
            $('.play').on('click',function(){
                owl.trigger('play.owl.autoplay',[1000])
            })
            $('.stop').on('click',function(){
                owl.trigger('stop.owl.autoplay')
            })
  </script>


@endpush


