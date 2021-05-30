@extends('layouts.app')

@section('title')
    Etnicode Digital Solution
@endsection

@push('addon-style')
<style>
   .responsive-youtube{
width:1040px;
height: 430px;
}
@media (min-width: 0) and (max-width:425px){
.responsive-youtube{
width:100%;
height: 198px;
}
}

</style>
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
          <h1>Digitize Your <br/> Business Now</h1>
          <h2>Mulai Nikmati Kemudahan Membuat Website Dengan Cepat, Hemat & Profesional Bersama Etnicode Digital Solution</h2>
          <div class="d-lg-flex">
            <a href="#" class="btn-get-started scrollto">Lihat Pilihan Website</a>
            <a href="https://youtu.be/wzIc96oRWhY" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Tonton Video <i class="icofont-play-alt-2"></i></a>
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
   <section id="cliens" class="cliens">
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
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              <b>Etnicode Digital Solution</b> merupakan layanan profesional Jasa Pembuatan Website dengan tampilan modern dan responsive
              yang siap membantu bisnis anda online dengan mudah dan cepat. Kami melayani berbagai macam pembuatan website, seperti website sekolah, website perusahaan, website toko online,website berita, hingga custom website sesuai kebutuhan anda.
            </p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
           <p>
              <b>Apa yang anda dapatkan?</b>
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Seluruh asset login website anda</li>
              <li><i class="ri-check-double-line"></i> Desain Logo Profesional</li>
              <li><i class="ri-check-double-line"></i> Video Tutorial Mengelola Website</li>
              <li><i class="ri-check-double-line"></i> Gratis Update Template Wp Premium</li>
              <li><i class="ri-check-double-line"></i> Gratis Konsultasi Sepuasnya</li>
            </ul>
            <a href="/#contact" class="btn-learn-more scrollto">Pilih Website</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h4><strong>Mengapa Anda Wajib Memiliki Website?</strong></h4>
              <p>
                Inilah alasan yang akan memperkuat anda agar lebih cepat membangun website mulai dari sekarang:
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-toggle="collapse" class="collapse" href="#accordion-list-1 "><span>01</span> Jangkauan Pasar Luas<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                    <p>
                      Dengan menggunakan website, anda bisa dengan mudah menjangkau konsumen yang lebih luas hingga keseluruh dunia.Bahkan anda bisa mentarget audience hingga keplosok daerah.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#accordion-list-2" class="collapsed"><span>02</span> Brand Awareness <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                    <p>
                      Website yang dipadukan dengan konten marketing menjadi alat yang sangat powerfull untuk meningkatkan brand awareness merek bisnis anda.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#accordion-list-3" class="collapsed"><span>03</span> Membuka Peluang Kerjasama <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                    <p>
                      Dengan memiliki situs website sendiri bisa membuka peluang kerjasama menjadi lebih banyak dengan partner bisnis baru anda.
                    </p>
                  </div>
                </li>
                <li>
                  <a data-toggle="collapse" href="#accordion-list-4" class="collapsed"><span>04</span> Menghemat Biaya Promosi <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-4" class="collapse" data-parent=".accordion-list">
                    <p>
                      Promosi menggunakan website mampu menghemat anggaran promosi anda karena segala informasi yang ingin disampaikan bisa dipublish melalui website bisnis anda.
                    </p>
                  </div>
                </li>
                <li>
                  <a data-toggle="collapse" href="#accordion-list-5" class="collapsed"><span>05</span> Meningkatkan Penjualan <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-5" class="collapse" data-parent=".accordion-list">
                    <p>
                      Dengan meningkatnya jangkauan dan juga brand awareness bisnis anda, maka secara otomatis akan memberi dampak positif kepada peningkatan penjualan dan omset bisnis anda.
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


    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Keuntungan Menggunakan Layanan Etnicode</h2>
          <p>Tahun 2021 hingga kedepan adalah tahun digital dimana semua orang akan lebih malas bergerak dan hanya bertatapan dengan smartphone mereka. Untuk itu, bagi para pemilik bisnis sangat cocok sekali agar membangun website segera.</p>
        </div>

        <div class="row mb-3">

          <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon text-center"><img src="/images/landing/01.png" alt=""></div>
              <h4><a href="">Website SEO & Mobile Friendly</a></h4>
              <p>Website yang kami bangun dengan struktur konten dan navigasi yang bekerja dengan baik pada perangkat smartphone.</p>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon text-center"><img src="/images/landing/02.png" alt=""></div>
              <h4><a href="">Menggunakan CMS</a></h4>
              <p>Content Management System (CMS) akan memudahkan anda dalam mengatur website. Cukup masuk kedashbord admin, semuanya bisa disetting dengan mudah.</p>
            </div>
          </div>

          <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon text-center"><img src="/images/landing/03.png" alt=""></div>
              <h4><a href="">Dokumentasi Video Tutorial</a></h4>
              <p>Anda akan mendapat video tutorial dari tim Etnicode agar tidak kebingungan bagaimana cara mengelola konten yang baik dan benar.</p>
            </div>
          </div>

        </div>
        <div class="row">
           <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon text-center"><img src="/images/landing/04.png" alt=""></div>
              <h4><a href="">Web Premium Desain Modern</a></h4>
              <p>Seluruh bahan pembuatan web yang kami gunakan dengan kualitas premium, namun anda bisa mendapatkannya dengan harga terjangkau.</p>
            </div>
          </div>


          <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="500">
              <div class="icon-box">
                  <div class="icon text-center"><img src="/images/landing/05.png" alt=""></div>
                  <h4><a href="">Proses Cepat Dan Prosesional</a></h4>
                  <p>Setelah diskusi website sesuai dengan kebutuhan anda, kami akan kerjakan segera dengan cepat dan profesional. Anda cukup menunggu laporan dari kami hingga web siap dionlinekan.</p>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="600">
              <div class="icon-box">
                <div class="icon text-center"><img src="/images/landing/06.png" alt=""></div>
                <h4><a href="">Bebas Konsultasi Gratis</a></h4>
                <p>Baik dalam proses pengerjaan ataupun sudah selesai progress, anda tetap bisa konsultasi santai bersama tim Etnicode Digital Solution.</p>
              </div>
            </div>
        </div>

      </div>
    </section><!-- End Services Section -->


    <!-- ======= Cta Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Masih Bingung Mau Bikin Web Apa?</h2>
          <p>Silahkan tonton video dibawah ini agar website yang akan anda bangun semakin jelas:</p>
        </div>
        <div class="row mb-3 justify-content-center">
           <iframe class="responsive-youtube"  src="https://www.youtube.com/embed/OjXkeHHPTzQ" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="container text-center">
            <a href="#" class="btn-learn-more">Lihat Pilihan Website</a>
           <button class="btn-learn-more">Lihat Portfolio</button>
        </div>
      </div>


    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Dibawah ini beberapa contoh website yang bisa menjadi referensi rencana pembuatan situs bisnis anda. Masih ada banyak tampilan keren dan menarik yang bisa anda dapatkan setelah terhubung dengan tim Etnicode Solution.</p>
        </div>
         <div class="row mb-3">

             <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                @foreach ($landing_portfolio as $item)
              <a href="">
            <div class="box">
                <h4 class="text-center">{{ $item->name }}</h4>
                <div class="icon text-center"><img src="{{ Storage::url($item->photo) }}" alt=""></div>
            </div>
            </a>
            @endforeach
          </div>
         </div>
      </div>
    </section>
    <!-- End Portfolio Section -->



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
              <h3>WEBSITE COMPANY PROFILE</h3>
              <div style="background-color: #262B4B" class="col-12 text-white mb-3 mt-2 text-center">Rp. 1.500.000,-</div>
              <p class="text-center">Cocok untuk anda yang ingin mendokumentasikan seluruh informasi seputar perusahaan seperti katalog produk, portfolio, layanan, promo dll.</p>
              <ul>
                <li><i class="bx bx-check"></i> 2 GB Space</li>
                <li><i class="bx bx-check"></i> Unlimited Bandwidth</li>
                <li><i class="bx bx-check"></i> Unlimited Website</li>
                <li><i class="bx bx-check"></i> Unlimited Email</li>
                <li><i class="bx bx-check"></i> Support IPv4 & IPv6</li>
                <li><i class="bx bx-check"></i> Akses SSH</li>
                <li><i class="bx bx-check"></i> Termasuk Domain + Hosting</li>
                <li><i class="bx bx-check"></i> Free Desain Logo Profesional</li>
                <li><i class="bx bx-check"></i> Dokumentasi Video</li>
                <li><i class="bx bx-check"></i> Premium WP-Theme</li>
                <li><i class="bx bx-check"></i> Free Update Theme</li>
                <li><i class="bx bx-check"></i> Free Konsultasi</li>
                <li><i class="bx bx-check"></i> Perpanjang Domain + Hosting/Thn</li>

              </ul>
              <a href="https://bit.ly/etnicodewebsite" class="buy-btn justify-content-center">Order Sekarang</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
               <h3>WEBSITE TOKO ONLINE</h3>
              <div style="background-color: #262B4B" class="col-12 text-white mb-3 mt-2 text-center">Rp. 1.500.000,-</div>
              <p class="text-center">Cocok untuk anda yang punya bisnis fisik dan ingin lebih mudah dalam menjual produk dengan fitur belanja online yang lengkap dan kekinian.</p>
              <ul>
               <li><i class="bx bx-check"></i> 2 GB Space</li>
                <li><i class="bx bx-check"></i> Unlimited Bandwidth</li>
                <li><i class="bx bx-check"></i> Unlimited Website</li>
                <li><i class="bx bx-check"></i> Unlimited Email</li>
                <li><i class="bx bx-check"></i> Support IPv4 & IPv6</li>
                <li><i class="bx bx-check"></i> Akses SSH</li>
                <li><i class="bx bx-check"></i> Termasuk Domain + Hosting</li>
                <li><i class="bx bx-check"></i> Free Desain Logo Profesional</li>
                <li><i class="bx bx-check"></i> Dokumentasi Video</li>
                <li><i class="bx bx-check"></i> Premium WP-Theme</li>
                <li><i class="bx bx-check"></i> Free Update Theme</li>
                <li><i class="bx bx-check"></i> Free Konsultasi</li>
                <li><i class="bx bx-check"></i> Perpanjang Domain + Hosting/Thn</li>
              </ul>
              <a href="http://bit.ly/etnicodeartikelweb" class="buy-btn justify-content-center">Order Sekarang</a>
            </div>
          </div>

         <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
             <h3>WEBSITE BERITA ONLINE</h3>
              <div style="background-color: #262B4B" class="col-12 text-white mb-3 mt-2 text-center">Rp. 1.500.000,-</div>
              <p class="text-center">Cocok untuk anda yang punya hobi menulis untuk diinformasikan setiap harinya melalui website. Bisa juga untuk focus mendapat penghasilan dari Adsense.</p>
              <ul>
                <li><i class="bx bx-check"></i> 2 GB Space</li>
                <li><i class="bx bx-check"></i> Unlimited Bandwidth</li>
                <li><i class="bx bx-check"></i> Unlimited Website</li>
                <li><i class="bx bx-check"></i> Unlimited Email</li>
                <li><i class="bx bx-check"></i> Support IPv4 & IPv6</li>
                <li><i class="bx bx-check"></i> Akses SSH</li>
                <li><i class="bx bx-check"></i> Termasuk Domain + Hosting</li>
                <li><i class="bx bx-check"></i> Free Desain Logo Profesional</li>
                <li><i class="bx bx-check"></i> Dokumentasi Video</li>
                <li><i class="bx bx-check"></i> Premium WP-Theme</li>
                <li><i class="bx bx-check"></i> Free Update Theme</li>
                <li><i class="bx bx-check"></i> Free Konsultasi</li>
                <li><i class="bx bx-check"></i> Perpanjang Domain + Hosting/Thn</li>

              </ul>
              <a href="https://bit.ly/etnicodeseoweb" class="buy-btn justify-content-center">Order Sekarang</a>
            </div>
          </div>



      </div>
    </section><!-- End Pricing Section -->



@endsection
@push('addon-script')
{{-- <script src="jquery.min.js"></script> --}}


@endpush


