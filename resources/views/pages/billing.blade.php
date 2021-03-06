@extends('layouts.dashboard')

@section('title')
    Billing
@endsection

@section('content')
<!-- Section Content -->

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>{{ $title }}</h1>
          </div>
         {{-- Content --}}
          <div class="card-body">
              {{-- <h1>{{ $billing->id }}</h1> --}}
                    <div class="table-responsive">
                      <table class="table table-striped" id="example">
                        <thead>
                          <tr>
                            <th class="text-center">
                              Invoice
                            </th>
                            <th>Invoice date</th>
                            <th>Due date</th>
                            <th>Total</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $item)
                            <tr>
                            <td class="text-center">
                              {{ $item->invoice }}
                            </td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->duedate }}</td>
                            <td>Rp.{{ number_format($item->price) }}</td>
                            <td>
                            @if ($item->status == 1)
                                <a href="{{ route('payment', $item->services_id) }}" class="btn btn-danger">
                                Belum Terbayar
                                </a>
                            @elseif ($item->status == 2)
                                <button type="button" class="btn btn-warning">
                                InProssess
                                </button>
                            @else
                                <button type="button" class="btn btn-primary">
                                Pembayaran Berhasil
                                </button>
                            @endif
                            </td>
                            @empty
                            <td colspan="7">Belum ada data untuk ditampilkan</td>

                        </tr>
                        @endforelse
                        </tbody>
                      </table>
                    </div>
                  </div>

        </section>
      </div>



@endsection




@push('addon-script')


@endpush
