@extends('layouts.dashboard')

@section('title')
    Dashboard
@endsection

@section('content')
<!-- Section Content -->

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Service</h1>
          </div>
         {{-- Content --}}
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped" id="example">
            <thead>
                <tr>
                <th class="text-center">
                    NO
                </th>
                <th>Nama Service</th>
                <th>Progress</th>
                <th>Expiration</th>
                <th>Status</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                        $nomor = 1;
                        @endphp
                    @forelse ($data as $item)
                    <tr>
                        <td class="text-center">
                            {{ $nomor++ }}
                        </td>

                        <td>{{ $item->name }}</td>
                        <td class="align-middle">
                            <div class="progress" data-height="4" data-toggle="tooltip" title="{{ $item->progres }}%">
                            <div class="progress-bar bg-success" data-width="{{ $item->progres }}%"></div>
                            </div>
                        </td>
                        <td>{{ $item->expiration }}</td>
                            @if ($item->status == 1)
                            <td><a href="{{ route('billing') }}">
                                <div class="badge badge-danger">Lanjutkan pembayaran</div></td>
                                </a>
                            @elseif ($item->status == 2)
                            <td><div class="badge badge-warning">Pengecekan Pemabayaran</div></td>
                            @elseif ($item->status == 3)
                            <td><div class="badge badge-success">Aktiv</div></td>
                            @else
                            <td><div class="badge badge-primary">Closed</div></td>
                            @endif

                            <td>
                                @if ($item->status == 3)

                                <a href="#" class="btn btn-warning">Perpanjang</a>
                                @elseif ($item->status == 2)
                                <a href="#" class="btn btn-primary">Contact Support</a>


                                @else

                                <a href="#" class="btn btn-warning" hidden></a>
                                @endif
                            </td>
                    @empty
                        <td class="text-center" colspan="6">Tidak Ada Data Untuk Di Tampilkan</td>
                    </tr>
                    @endforelse ($data as $item )

            </tbody>
            </table>
        </div>
        </div>

        </section>
      </div>



@endsection

@push('addon-script')

@endpush
