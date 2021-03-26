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
                <tr>
                <td class="text-center">
                    1
                </td>
                <td>Web Development</td>
                <td class="align-middle">
                    <div class="progress" data-height="4" data-toggle="tooltip" title="20%">
                    <div class="progress-bar bg-danger" data-width="20%"></div>
                    </div>
                </td>
                <td>01-02-2020</td>
                <td><div class="badge badge-warning">In Progress</div></td>
                <td><a href="#" class="btn btn-primary">Review</a></td>
                </tr>
            </tbody>
            </table>
        </div>
        </div>

        </section>
      </div>



@endsection

@push('addon-script')
<script>
    function clock() {// We create a new Date object and assign it to a variable called "time".
        var time = new Date(),

            // Access the "getHours" method on the Date object with the dot accessor.
            hours = time.getHours(),

            // Access the "getMinutes" method with the dot accessor.
            minutes = time.getMinutes(),


            seconds = time.getSeconds();

        document.querySelectorAll('.clock')[0].innerHTML = harold(hours) + ":" + harold(minutes) + ":" + harold(seconds);

    function harold(standIn) {
        if (standIn < 10) {
        standIn = '0' + standIn
        }
        return standIn;
    }
}
    setInterval(clock, 1000);

    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@endpush
