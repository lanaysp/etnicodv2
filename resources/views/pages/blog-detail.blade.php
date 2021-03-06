@extends('layouts.app-blog')

@section('title')
    Blog Detail
@endsection

@push('addon-style')
<style>
    img.img-responsive {
    max-width: 100%;
    height: auto;
}
blockquote {
    max-width: 390px;
    color: #5c4c40;
    text-align: center;
    border-left: 3px solid #897860;
    padding-left: 5px;
    margin-left: 40px;
}
</style>

@endpush
@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="/">Home</a></li>
          <li><a href="/blog">Blog</a></li>
          <li>Blog Details</li>
        </ol>
        <h2>Blog Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details position-relative">
        <div class="container">
          <div class="row">

            <div class="col-12 col-md-12 col-lg-8 justify-content-center">
            <h1 class="judul-blog-detail mb-4 mt-4" data-aos="fade-up" data-aos-delay="200">{{ $blog->name }}</h1>
            <p class="blog-text mt-3 mb-4" data-aos="fade-up" data-aos-delay="300">{{ $blog->blogcategory->name }} • {{ $blog->created_at }}</p>
              {{-- <img
                    src="{{ Storage::url($blog->photo) }}"
                    alt=""
                    class="w-100 mb-4 " data-aos="fade-up" data-aos-delay="400"
                  /> --}}

              {!! $blog->description !!}
              </div>
              <div class="col-lg-4">
                  <div class="card">
                      <div class="card-body">
                          <div class="col-lg-12">
                   <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <form class="form-inline" action="/blog/cari" method="GET">
                            <input class="form-control col-7 mr-1" name="cari" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-primary my-1 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-4">
                    <div class="list-group" style="width: 18rem;">
                        <h5 href="#" class="list-group-item list-group-item-action">
                            Pos-pos Terbaru
                        </h5>
                        @foreach ($blogs as $item)
                        <a href="{{ route('detail-blog',$item->slug) }}" class="list-group-item list-group-item-action">{{ $item->name }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-12 mt-4">
                    <div class="list-group" style="width: 18rem;">
                        <h5 href="#" class="list-group-item list-group-item-action">
                            Kategori Blog
                        </h5>
                        @foreach ($blogcategories as $item)
                        <a href="{{ route('blogcategories-detail',$item->slug) }}" class="list-group-item list-group-item-action">{{ $item->name }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-12 mt-4">
                    <div class="list-group" style="width: 18rem; box-shadow: black;">
                        <a href="https://my.domainesia.com/ref.php?u=12212" target="_blank"><img src="https://dnva.me/62c54" alt="DomaiNesia"></a>
                    </div>
                </div>
                      </div>
                  </div>
              </div>
              <div class="col-12">
            <div class="mt-5">
                share On :
                    <a href="javascript:void(window.open('https://www.facebook.com/sharer.php?u=' + encodeURIComponent(document.location) + '?t=' + encodeURIComponent(document.title),'_blank'))" target="_self" class="justify-content-center social-share">
                  <i class='bx bxl-facebook bx-sm bx-border'></i>
                </a>
                <a href="javascript:void(window.open('https://twitter.com/share?url=' + encodeURIComponent(document.location) + '&amp;text=' + encodeURIComponent(document.title) + '&amp;via=codepolitan&amp;hashtags=codepolitan','_blank'))" target="_self" class="justify-content-center social-share">
                   <i class="bx bxl-twitter bx-sm bx-border"></i>
                </a>
                <a href="javascript:void(window.open('https://api.whatsapp.com/send?text=' + encodeURIComponent(document.location) + '&amp;title=' + encodeURIComponent(document.title),'_blank'))" class="justify-content-center social-share">
                    <i class="bx bxl-whatsapp bx-sm bx-border"></i>
                </a>
                <a href="javascript:void(window.open('https://t.me/share/url?url=' + encodeURIComponent(document.location) + '&amp;title=' + encodeURIComponent(document.title),'_blank'))" class="justify-content-center social-share">
                    <i class="bx bxl-telegram bx-sm bx-border"></i>
                </a>
                <a href="javascript:void(window.open('https://www.linkedin.com/sharing/share-offsite/?url=' + encodeURIComponent(document.location) + '&amp;title=' + encodeURIComponent(document.title),'_blank'))" class="justify-content-center social-share">
                    <i class="bx bxl-linkedin bx-sm bx-border"></i>
                </a>
                <a href="javascript:void(window.open('http://pinterest.com/pin/create/button/?url=' + encodeURIComponent(document.location) + '&amp;title=' + encodeURIComponent(document.title),'_blank'))" class="justify-content-center social-share">
                    <i class="bx bxl-pinterest bx-sm bx-border"></i>
                </a>
                </div>
               <div class="col-12 mt-5">
                    @comments([
                        'model' => $blog,
                        'perPage' => 2
                    ])
               </div>

        </div>
            </div>

          </div>
        </div>

    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->


@endsection
