@extends('layouts.app-blog')

@section('title')
    Blog
@endsection

@section('content')

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
                    <div class="col-md-3 col-sm-6 col-lg-4 item mb-3">
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
