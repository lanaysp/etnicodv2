@extends('layouts.dashboard')

@section('title')
    Kiirim Bukti Transfer
@endsection

@section('content')
<!-- Section Content -->

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Payment Expired {{ $billing->duedate }}</h1>
          </div>
         {{-- Content --}}
        <div class="card-body">
         <form action="{{ route('tf', $billing->services_id) }}" method="post" enctype="multipart/form-data">
            @csrf
             <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" value="{{ Auth::user()->name }}" readonly>
                    </div>
                </div>
            </div>
             <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Invoice</label>
                        <input type="text" class="form-control" value="{{ $billing->invoice }}" readonly>
                    </div>
                </div>
            </div>
             <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Layanan </label>
                        <input type="text" class="form-control" value="{{ $services->name }}" readonly>
                    </div>
                </div>
            </div>
             <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Upload Bukti Transfer</label>
                        <input type="file" class="form-control" name="photo"  required>
                    </div>
                </div>
            </div>
            <button type="submit"class="btn btn-primary">Kirim Bukti Pembayaran</button>
        </form>
        </div>

        </section>
      </div>


@endsection


