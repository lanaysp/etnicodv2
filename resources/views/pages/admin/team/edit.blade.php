@extends('layouts.admin')

@section('title')
  Teams
@endsection

@section('content')
<!-- Section Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Teams Etnicode</h1>
          </div>
          <div class="section-body">
              <div class="row">
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
          <form action="{{ route('team.update', $item->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" name="name" value="{{ $item->name }}" required />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Jabatan</label>
                      <input type="text" class="form-control" name="jabatan" value="{{ $item->jabatan }}" required />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Whatsapp</label>
                      <input type="text" class="form-control" name="wa" value="{{ $item->wa }}" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Facebook</label>
                      <input type="text" class="form-control" name="fb" value="{{ $item->fb }}" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Instagram</label>
                      <input type="text" class="form-control" name="ig" value="{{ $item->ig }}" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Github</label>
                      <input type="text" class="form-control" name="git" value="{{ $item->git }}" />
                    </div>
                  </div>

                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="photo" class="form-control" required>
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


