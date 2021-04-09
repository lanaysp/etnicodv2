@extends('layouts.admin')

@section('title')
  Payment Acc
@endsection
 @push('addon-style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" integrity="sha512-pDpLmYKym2pnF0DNYDKxRnOk1wkM9fISpSOjt8kWFKQeDmBTjSnBZhTd41tXwh8+bRMoSaFsRnznZUiH9i3pxA==" crossorigin="anonymous" />
    @endpush
@section('content')
<!-- Section Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Invoice : {{ $item->invoice }}</h1>
          </div>
          <div class="section-body">
              {{-- content --}}
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
          <form action="{{ route('layanan.update', $item->services_id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                        <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Nama</th>
                            <th scope="col" class="w-25">Layanan</th>
                            <th scope="col">Harga</th>
                            <th scope="col" class="w-25">Waktu Transfer</th>
                            <th scope="col">Bukti Transfer</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $services->name }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->updated_at}}</td>
                                <td><a download href="{{ Storage::url($item->photo) }}"><img class="w-25" src="{{ Storage::url($item->photo) }}" alt=""></a></td>
                            </tr>

                        </tbody>
                        </table>
                    </div>
                  </div>

                <div class="row">
                  <div class="col-12">
                    <form action="{{ route('layanan.update', $item->services_id)}}" method="POST" enctype="multipart/form-data">
                         @method('PUT')
                            <input type="text" name="status" hidden >

                          <button type="submit" class="btn btn-success float-right">Setujui Pembayaran</button>
                    </form>
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

