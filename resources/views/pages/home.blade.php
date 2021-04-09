@extends('layouts.app')

@section('title')
    Etnicode Media Solution
@endsection

@push('addon-style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
@endpush

@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Go Digital Dengan Website Profesional</h1>
          <h2>Mulai Nikmati Kemudahan Membuat Website Dengan Cepat, Hemat & Profesional Bersama Etnicode Solution</h2>
          <div class="d-lg-flex">
            <a href="#about" class="btn-get-started scrollto">Muali Kerja Sama Dengan Kami</a>
            <a href="https://youtu.be/wzIc96oRWhY" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Lihat Video <i class="icofont-play-alt-2"></i></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
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
              <b>Etnicode</b> merupakan layanan profesional Jasa Pembuatan Website dengan tampilan profesional
              dan responsive yang siap membantu bisnis anda online dengan mudah dan cepat.
              Kami melayani berbagai macam pembuatan website seperti website sekolah, website perusahaan,
              website toko online hingga custom website sesuai kebutuhan anda.
            </p>
            <a href="/#contact" class="btn-learn-more scrollto">Learn More</a>
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

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/skills.png" class="img-fluid" alt="">
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
                <span class="skill">Jasa SEO WEBSITE <i class="val">95%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">JASA DESAIN GRAFIS <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">APLIKASI ANDROID <i class="val">87%</i></span>
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
          <p>Sebagai penyedia layanan Jasa Profesional, Etnicode Solution berusaha memberikan keahlian terbaik untuk ikut kontribusi membangun bisnis anda lebih maksimal.
            Gunakan layanan Etnicode sesuai kebutuhan bisnis anda dan rasakan mudahnya menaikkan omset melalui kekuatan digital:.</p>
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
              <h4><a href="">Jasa SEO Website</a></h4>
              <p>Website anda susah menempati Halaman Satu Google? Gunakan Jasa SEO Web Etnicode agar situs anda lebih cepat nangkring di Halaman Pertama Mesin Pencari.</p>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-image"></i></div>
              <h4><a href="">Jasa Desain Grafis</a></h4>
              <p>Etnicode menawarkan Jasa Desain Grafis seperti Logo, Banner, Karatalog Produk, Konten Marketing dll dengan tampilan profesional yang siap membantu bisnis anda lebih mudah bersaing dengan kompetitor.</p>
            </div>
          </div>

        </div>
        <div class="row">
           <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-android"></i></div>
              <h4><a href="">Jasa Pembuatan Aplikasi Android</a></h4>
              <p>Bisnis anda membutuhkan Aplikasi Android? Etnicode siap membantu anda dengan layanan Jasa Pembuatan Aplikasi Android seperti Toko Online, Cafe, Chat, Perusahaan dan lain-lain.</p>
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
              <h4><a href="">Jasa Iklan Ads</a></h4>
              <p>Ingin menaikkan traffic atau penjualan produk anda? Solusi yang tepat ialah menggunakan Iklan Ads. Saatnya kolaborasi dengan Etnicode untuk mendapat hasil yang optimal</p>
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
            <h3>Etnicode Media Solution</h3>
            <p> Diera modern serba digital seperti sekarang ini, jika anda tidak mampu menjangkau pasar yang lebih luas dengan cara memanfaatkan website, kemungkinan besar peluang bangkrut anda semakin dekat.
              Hindari hal tersebut dengan menggunakan Layanan Profesional Etnicode.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle scrollto" href="{{ route('bundle') }}">Coba Paket Bulanan Kami</a>
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
    <!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Etnicode terus meningkatkan skill dan pelayanan terbaik untuk menciptakan kenyamanan anda saat bekerjasama dengan kami. Inilah team Etnicode yang akan mendukung bisnis anda bertumbuh lebih cepat melalui kekuatan digital:</p>
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
                <li><i class="bx bx-check"></i> Portal</li>
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
              <h3>JASA SEO WEBSITE</h3>
              <h4><sup></sup><span>Free Konsultasi</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> SEO Web Sekali Order</li>
                <li><i class="bx bx-check"></i> SEO Web Bulanan</li>
                <li><i class="bx bx-check"></i> SEO Web Tahunan</li>
                <li><i class="bx bx-check"></i> SEO Web Kontrak Panjang</li>
                <li><i class="bx bx-check"></i> SEO Web Sesuai Kebutuhan</li>
                <li><i class="bx bx-check"></i> E-Courses SEO Website</li>
                <li><i class="bx bx-check"></i> Garansi Halaman 1 Google</li>
                <li><i class="bx bx-check"></i> Harga Terjangkau</li>
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

        </div>
        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>JASA PLIKASI ANDROID</h3>
              <h4><sup></sup><span>Free Konsultasi</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Aplikasi Toko Online</li>
                <li><i class="bx bx-check"></i> Aplikasi Marketplace</li>
                <li><i class="bx bx-check"></i> Aplikasi Coffe Shop</li>
                <li><i class="bx bx-check"></i> Aplikasi Food Market</li>
                <li><i class="bx bx-check"></i> Aplikasi Chat</li>
                <li><i class="bx bx-check"></i> Aplikasi Finance</li>
                <li><i class="bx bx-check"></i> Aplikasi Agen Biro Wisata</li>
                <li><i class="bx bx-check"></i> Aplikasi Healt/Fitness/Medicall</li>
                <li><i class="bx bx-check"></i> Custom Sesuai Kebutuhan</li>

              </ul>
              <a href="https://bit.ly/etnicodeandroid" class="buy-btn">Hubungi Etnicode</a>
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
              <h3>JASA IKLAN ADS</h3>
              <h4><sup></sup><span>Free Konsultasi</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Iklan Facebook Ads</li>
                <li><i class="bx bx-check"></i> Iklan Instagram Ads</li>
                <li><i class="bx bx-check"></i> Iklan Google Search</li>
                <li><i class="bx bx-check"></i> Iklan Youtube Ads</li>
                <li><i class="bx bx-check"></i> Iklan Google Shopping</li>
                <li><i class="bx bx-check"></i> Iklan Google Display Network</li>
                <li><i class="bx bx-check"></i> Iklan Google AdMob</li>
                <li><i class="bx bx-check"></i> Iklan Tiktok Ads</li>
                <li><i class="bx bx-check"></i> Free Konsultasi</li>
              </ul>
              <a href="http://bit.ly/etnicodeiklanads" class="buy-btn">Hubungi Etnicode</a>
            </div>
          </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>Berikut pertanyaan yang sering kami terima saat melayani clients dari berbagai wilayah. Sebelum anda terhubung dengan tim Etnicode, pastikan anda sudah mencari jawaban melalui FAQ yang sudah kami sediakan:</p>
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
          <p>Sudah siap memaksimalkan perkembangan bisnis anda diera digital? Kini saatnya anda menjadi terdepan dari kompetitor anda, siapkan kebutuhan anda dan konsultasikan bersama tim Etnicode dibawah ini dengan mencantumkan nama dan alamat domisili: </p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Etnicode Media Solution, Jl. P. Syarif No.36, RT.02/RW.01, Rw. II, Saripan, Kec. Jepara, Kabupaten Jepara, Jawa Tengah 59414</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>etnicode@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>0822 6000 0513</p>
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
                      <option value='JASA SEO WEBSITE'>JASA SEO WEBSITE</option>
                      <option value='JASA DESAIN GRAFIS'>JASA DESAIN GRAFIS</option>
                      <option value='JASA EDITING VIDEO'>JASA EDITING VIDEO</option>
                      <option value='JASA PEMBUATAN APLIKASI ANDROI'>JASA PEMBUATAN APLIKASI ANDROID</option>
                      <option value='JASA IKLAN ADS'>JASA IKLAN ADS</option>
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
              <div class="text-center"><a class="send_form btn btn btn-outline-primary btn-rounded col-12" href="javascript:void" type="submit" title="Send Message">Send Message</a></div>
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
    walink2 = 'Hallo Etnicode Saya Ingin Konsultasi, berikut data diri saya: ',
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


