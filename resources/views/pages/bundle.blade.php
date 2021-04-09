@extends('layouts.app-blog')

@section('title')
    Layanan
@endsection

@push('addon-style')

@endpush

@section('content')


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="/">Home</a></li>
        </ol>
        <h2>Produk & Layanan</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        {{-- content --}}

         <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Website</h2>

        </div>

        <div class="row">


          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
            <form action="{{ route('create') }}" method="POST" >
                @csrf
              <h3 >Custom Website</h3>
              <input type="text" name="name" value="Custom Website" hidden>
              <input type="number" name="price" value="999000" hidden>
              <h4><sup>Rp.</sup>999.000<span>per Bulan</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Domain & Hosting</li>
                <li><i class="bx bx-check"></i> Dokumen Panduan Pengelolaan</li>
                <li><i class="bx bx-check"></i> Garansi Uang Kembali</li>
                <li><i class="bx bx-check"></i> Maintenance 1 Bulan</li>
                <li><i class="bx bx-check"></i> Support 24 jam</li>
                <li><i class="bx bx-check"></i> Rumah Sakit</li>
                 <li class="na"><i class="bx bx-x"></i><span> Custom Sesuai Kebutuhan</span></li>
                 <li class="na"><i class="bx bx-x"></i><span> Contoh X</span></li>
                 <li class="na"><i class="bx bx-x"></i><span> Contoh X</span></li>
              </ul>
                <button href="" type="submit" class="buy-btn" onClick="return confirm('Anda yakin akan membeli layanan ini?')">Order Sekarang</button>
            </div>
            </form>
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
                <form action="{{ route('create') }}" method="POST" >
                    @csrf
                <input type="text" name="name" value="Wordpress Website" hidden>
                <input type="number" name="price" value="999000" hidden>
              <h3>Wordpress Website</h3>
              <h4><sup>Rp.</sup>999.000<span>per Bulan</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Domain & Hosting</li>
                <li><i class="bx bx-check"></i> Dokumen Panduan Pengelolaan</li>
                <li><i class="bx bx-check"></i> Garansi Uang Kembali</li>
                <li><i class="bx bx-check"></i> Maintenance 1 Bulan</li>
                <li><i class="bx bx-check"></i> Support 24 jam</li>
                <li><i class="bx bx-check"></i> Rumah Sakit</li>
                 <li class="na"><i class="bx bx-x"></i><span> Custom Sesuai Kebutuhan</span></li>
                 <li class="na"><i class="bx bx-x"></i><span> Contoh X</span></li>
                 <li class="na"><i class="bx bx-x"></i><span> Contoh X</span></li>
              </ul>
                <button href="" type="submit" class="buy-btn" onClick="return confirm('Anda yakin akan membeli layanan ini?')">Order Sekarang</button>
            </div>
        </form>
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
            <form action="{{ route('create') }}" method="POST" >
            @csrf
            <input type="text" name="name" value="Mobile Apps" hidden>
            <input type="number" name="price" value="999000" hidden>
              <h3>Mobile Apps</h3>
              <h4><sup>Rp.</sup>999.000<span>per Bulan</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Domain & Hosting</li>
                <li><i class="bx bx-check"></i> Dokumen Panduan Pengelolaan</li>
                <li><i class="bx bx-check"></i> Garansi Uang Kembali</li>
                <li><i class="bx bx-check"></i> Maintenance 1 Bulan</li>
                <li><i class="bx bx-check"></i> Support 24 jam</li>
                <li><i class="bx bx-check"></i> Rumah Sakit</li>
                 <li class="na"><i class="bx bx-x"></i><span> Custom Sesuai Kebutuhan</span></li>
                 <li class="na"><i class="bx bx-x"></i><span> Contoh X</span></li>
                 <li class="na"><i class="bx bx-x"></i><span> Contoh X</span></li>
              </ul>
                <button href="" type="submit" class="buy-btn" onClick="return confirm('Anda yakin akan membeli layanan ini?')">Order Sekarang</button>
            </div>
            </form>
          </div>



          {{-- <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
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
              <a href="" class="buy-btn">Order Sekarang</a>
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
              <a href="" class="buy-btn">Order Sekarang</a>
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
              <a href="" class="buy-btn">Order Sekarang</a>
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
              <a href="" class="buy-btn">Order Sekarang</a>
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
              <a href="" class="buy-btn">Order Sekarang</a>
            </div>
          </div> --}}

      </div>
        <div class="section-title mt-3">
          <h2>Desain</h2>
        </div>
      <div class="row">

          <div class="col-lg-4 mt-3" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
                <form action="{{ route('create') }}" method="POST" >
            @csrf
            <input type="text" name="name" value="Logo" hidden>
            <input type="number" name="price" value="999000" hidden>
              <h3>Logo</h3>
              <h4><sup>Rp.</sup>999.000<span>per Bulan</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Domain & Hosting</li>
                <li><i class="bx bx-check"></i> Dokumen Panduan Pengelolaan</li>
                <li><i class="bx bx-check"></i> Garansi Uang Kembali</li>
                <li><i class="bx bx-check"></i> Maintenance 1 Bulan</li>
                <li><i class="bx bx-check"></i> Support 24 jam</li>
                <li><i class="bx bx-check"></i> Rumah Sakit</li>
                 <li class="na"><i class="bx bx-x"></i><span> Custom Sesuai Kebutuhan</span></li>
                 <li class="na"><i class="bx bx-x"></i><span> Contoh X</span></li>
                 <li class="na"><i class="bx bx-x"></i><span> Contoh X</span></li>
              </ul>
                <button href="" type="submit" class="buy-btn" onClick="return confirm('Anda yakin akan membeli layanan ini?')">Order Sekarang</button>
            </div>
        </form>
          </div>

          <div class="col-lg-4 mt-3" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
                <form action="{{ route('create') }}" method="POST" >
            @csrf
            <input type="text" name="name" value="Banner" hidden>
            <input type="number" name="price" value="999000" hidden>
              <h3>Banner</h3>
              <h4><sup>Rp.</sup>999.000<span>per Bulan</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Domain & Hosting</li>
                <li><i class="bx bx-check"></i> Dokumen Panduan Pengelolaan</li>
                <li><i class="bx bx-check"></i> Garansi Uang Kembali</li>
                <li><i class="bx bx-check"></i> Maintenance 1 Bulan</li>
                <li><i class="bx bx-check"></i> Support 24 jam</li>
                <li><i class="bx bx-check"></i> Rumah Sakit</li>
                 <li class="na"><i class="bx bx-x"></i><span> Custom Sesuai Kebutuhan</span></li>
                 <li class="na"><i class="bx bx-x"></i><span> Contoh X</span></li>
                 <li class="na"><i class="bx bx-x"></i><span> Contoh X</span></li>
              </ul>
                <button href="" type="submit" class="buy-btn" onClick="return confirm('Anda yakin akan membeli layanan ini?')">Order Sekarang</button>
            </div>
            </form>
          </div>

          <div class="col-lg-4 mt-3" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
                 <form action="{{ route('create') }}" method="POST" >
            @csrf
            <input type="text" name="name" value="Konten Media Sosial" hidden>
            <input type="number" name="price" value="999000" hidden>
              <h3>Konten Media Sosial</h3>
              <h4><sup>Rp.</sup>999.000<span>per Bulan</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Domain & Hosting</li>
                <li><i class="bx bx-check"></i> Dokumen Panduan Pengelolaan</li>
                <li><i class="bx bx-check"></i> Garansi Uang Kembali</li>
                <li><i class="bx bx-check"></i> Maintenance 1 Bulan</li>
                <li><i class="bx bx-check"></i> Support 24 jam</li>
                <li><i class="bx bx-check"></i> Rumah Sakit</li>
                 <li class="na"><i class="bx bx-x"></i><span> Custom Sesuai Kebutuhan</span></li>
                 <li class="na"><i class="bx bx-x"></i><span> Contoh X</span></li>
                 <li class="na"><i class="bx bx-x"></i><span> Contoh X</span></li>
              </ul>
                <button href="" type="submit" class="buy-btn" onClick="return confirm('Anda yakin akan membeli layanan ini?')">Order Sekarang</button>
            </div>
            </form>
          </div>

      </div>
        <div class="section-title mt-3">
          <h2>Editing Video</h2>
        </div>
      <div class="row">

          <div class="col-lg-4 mt-3" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
                 <form action="{{ route('create') }}" method="POST" >
            @csrf
            <input type="text" name="name" value="Color Grading Video" hidden>
            <input type="number" name="price" value="999000" hidden>
              <h3>Color Grading Video</h3>
              <h4><sup>Rp.</sup>999.000<span>per Bulan</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Domain & Hosting</li>
                <li><i class="bx bx-check"></i> Dokumen Panduan Pengelolaan</li>
                <li><i class="bx bx-check"></i> Garansi Uang Kembali</li>
                <li><i class="bx bx-check"></i> Maintenance 1 Bulan</li>
                <li><i class="bx bx-check"></i> Support 24 jam</li>
                <li><i class="bx bx-check"></i> Rumah Sakit</li>
                 <li class="na"><i class="bx bx-x"></i><span> Custom Sesuai Kebutuhan</span></li>
                 <li class="na"><i class="bx bx-x"></i><span> Contoh X</span></li>
                 <li class="na"><i class="bx bx-x"></i><span> Contoh X</span></li>
              </ul>
                 <button href="" type="submit" class="buy-btn" onClick="return confirm('Anda yakin akan membeli layanan ini?')">Order Sekarang</button>
            </div>
            </form>
          </div>

          <div class="col-lg-4 mt-3" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
                 <form action="{{ route('create') }}" method="POST" >
            @csrf
            <input type="text" name="name" value="Edit Video" hidden>
            <input type="number" name="price" value="999000" hidden>
              <h3>Edit Video</h3>
              <h4><sup>Rp.</sup>999.000<span>per Bulan</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Domain & Hosting</li>
                <li><i class="bx bx-check"></i> Dokumen Panduan Pengelolaan</li>
                <li><i class="bx bx-check"></i> Garansi Uang Kembali</li>
                <li><i class="bx bx-check"></i> Maintenance 1 Bulan</li>
                <li><i class="bx bx-check"></i> Support 24 jam</li>
                <li><i class="bx bx-check"></i> Rumah Sakit</li>
                 <li class="na"><i class="bx bx-x"></i><span> Custom Sesuai Kebutuhan</span></li>
                 <li class="na"><i class="bx bx-x"></i><span> Contoh X</span></li>
                 <li class="na"><i class="bx bx-x"></i><span> Contoh X</span></li>
              </ul>
               <button href="" type="submit" class="buy-btn" onClick="return confirm('Anda yakin akan membeli layanan ini?')">Order Sekarang</button>
            </div>
            </form>
          </div>

          <div class="col-lg-4 mt-3" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
                 <form action="" method="POST" >
            @csrf
            <input type="text" name="name" value="Iklan Ads" hidden>
            <input type="number" name="price" value="999000" hidden>
              <h3>Iklan Ads</h3>
              <h4><sup>Rp.</sup>999.000<span>per Bulan</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Domain & Hosting</li>
                <li><i class="bx bx-check"></i> Dokumen Panduan Pengelolaan</li>
                <li><i class="bx bx-check"></i> Garansi Uang Kembali</li>
                <li><i class="bx bx-check"></i> Maintenance 1 Bulan</li>
                <li><i class="bx bx-check"></i> Support 24 jam</li>
                <li><i class="bx bx-check"></i> Rumah Sakit</li>
                 <li class="na"><i class="bx bx-x"></i><span> Custom Sesuai Kebutuhan</span></li>
                 <li class="na"><i class="bx bx-x"></i><span> Contoh X</span></li>
                 <li class="na"><i class="bx bx-x"></i><span> Contoh X</span></li>
              </ul>
               <button type="submit" class="buy-btn" id="tombol" onClick="return confirm('Anda yakin akan membeli layanan ini?')">Order Sekarang</button>
            </div>
            </form>
          </div>

      </div>

    </section>



      </div>
    </section>

  </main><!-- End #main -->


@endsection

@push('addon-script')
  <script>
    function myFunction() {
    document.getElementById("myForm").submit();
  }
  </script>
@endpush


