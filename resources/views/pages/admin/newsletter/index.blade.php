@extends('layouts.admin')

@section('title')
    Newsletter
@endsection

@section('content')
<!-- Section Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Newsletter</h1>
          </div>
          <div class="section-body">
              <div class="row mt-4">
              <div class="col-6">
                <div class="card">
                  <div class="card-header">
                    <h4>All Email</h4>
                  </div>
                  <div class="card-body">
                       <a href="{{ route('newsletter.create') }}" class="btn btn-primary mb-3">
                            + Tambah Data Baru
                        </a>
                    <div class="clearfix mb-3"></div>
                            <div class="table-responsive">
                                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Email</th>
                                    </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
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
    <script>
        // AJAX DataTablenn
        var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [
                { data: 'DT_RowIndex', searchable: false, orderable: false},
                { data: 'email', name: 'email' },
            ]
        });
    </script>
@endpush
