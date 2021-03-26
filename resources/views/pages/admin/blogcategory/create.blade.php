@extends('layouts.admin')

@section('title')
    Dashboard Admin Kategori Blog Baru
@endsection

@section('content')
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Blog Etnicode</h1>
          </div>
          <div class="section-body">
              <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>All Posts</h4>
                  </div>
                  <div class="card-body">
                    <div class="clearfix mb-3"></div>
                                <form action="{{ route('blogcategory.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nama Kategori</label>
                                                <input type="text" name="name" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col text-right">
                                            <button type="submit" class="btn btn-success btn-login">
                                                Simpan
                                            </button>
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
