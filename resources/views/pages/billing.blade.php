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
                    <div class="table-responsive">
                      <table class="table table-striped" id="example">
                        <thead>
                          <tr>
                            <th class="text-center">
                              Invoice
                            </th>
                            <th>Invoice date</th>
                            <th>Du date</th>
                            <th>Total</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="text-center">
                              ETC90281
                            </td>
                            <td>2018-01-20</td>
                            <td>2018-01-20</td>
                            <td>Rp: 500.000</td>
                            <td><a href="" id="payment" class="badge badge-danger">blm.terbayar</a></td>
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

$("#payment").fireModal({
    title: 'Upload Bukti Pemebayaran',
    body: '<form class="form-group"> <input type="file" class="form-control"> <br> <button class="btn btn-primary" type="submit">Kirim</button> </form>',
    center: true});
</script>
@endpush
