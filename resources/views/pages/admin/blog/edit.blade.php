@extends('layouts.admin')

@section('title')
  Dashboard Admin Blog Update 
@endsection
 @push('addon-style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" integrity="sha512-pDpLmYKym2pnF0DNYDKxRnOk1wkM9fISpSOjt8kWFKQeDmBTjSnBZhTd41tXwh8+bRMoSaFsRnznZUiH9i3pxA==" crossorigin="anonymous" />
    @endpush
@section('content')
<!-- Section Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Blog Etnicode</h1>
          </div>
          <div class="section-body">
              {{-- content --}}
              Hello words
              <div class="row mt-4">
              <div class="col-12">
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <form action="{{ route('blog.update', $item->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Judul Blog</label>
                      <input type="text" class="form-control" name="name" value="{{ $item->name }}" required />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Kategori Blog</label>
                      <select name="blogcategories_id" class="form-control">
                        <option value="{{ $item->blogcategories_id }}">{{ $item->blogcategory->name }}</option>
                        <option value="" disabled>----------------</option>
                        @foreach ($blogcategories as $blogcategories)
                          <option value="{{ $blogcategories->id }}">{{ $blogcategories->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <!--<div class="col-md-12">-->
                  <!--  <div class="form-group">-->
                  <!--      <label>Foto</label>-->
                  <!--      <input type="file" name="photo" class="form-control" required>-->
                  <!--  </div>-->
                  <!--</div>-->
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Penulis Blog</label>
                      <input type="text" class="form-control" name="users_id" value="{{ Auth::user()->id }}" hidden/>
                      <input type="text" class="form-control" value="{{ Auth::user()->name }}" readonly/>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Deskripsi</label>
                      <textarea name="description" id="summernote">{!! $item->description !!}</textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col text-right">
                    <button
                      type="submit"
                      class="btn btn-success btn-login"
                    >
                      Simpan
                    </button>
                  </div>
              </div>
            </div>
          </form>
         </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
@endsection

@push('addon-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.js" integrity="sha512-kZv5Zq4Cj/9aTpjyYFrt7CmyTUlvBday8NGjD9MxJyOY/f2UfRYluKsFzek26XWQaiAp7SZ0ekE7ooL9IYMM2A==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js" integrity="sha512-+cXPhsJzyjNGFm5zE+KPEX4Vr/1AbqCUuzAS8Cy5AfLEWm9+UI9OySleqLiSQOQ5Oa2UrzaeAOijhvV/M4apyQ==" crossorigin="anonymous"></script>
<script>
      $('#summernote').summernote({
        tabsize: 2,
        height: 100
      });
    </script>
@endpush
