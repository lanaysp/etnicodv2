@extends('layouts.admin')

@section('title')
    Billing
@endsection

@section('content')

<!-- Section Content -->

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
              Layanan
          </div>
         {{-- Content --}}
          <div class="card-body">

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
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
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
                            <td class="text-center">
                            @if ($item->status == 1)
                                <button type="button" class="btn btn-danger">
                                Belum Terbayar
                                </button>
                            @elseif ($item->status == 2)
                                 <a href="{{ route('layanan.edit', $item->services_id) }}"  class="btn btn-warning" >
                                Acc Pembayaran
                                </a><p>
                                <small><a target="_blank" href="{{ Storage::url($item->photo) }}" alt="">Lihat Bukti Transfer</a></small>
                            @else
                                <button type="button" class="btn btn-success">
                                Pembayaran Berhasil Di Acc
                                </button>
                            @endif
                            </td>
                            <td>
                                <form action="{{ route('layanan.destroy', $item->services_id) }}" method="POST" onsubmit="return confirm(ConfirmDelete())">
                                {{ method_field('delete') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" onClick="return confirm('Anda yakin akan mengahapus data ini?')">
                                    Hapus
                                </button>
                                </form>
                            </td>
                            @empty
                            <td class="text-center" colspan="6">Belum ada data yang bisa ditampilkan</td>
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
