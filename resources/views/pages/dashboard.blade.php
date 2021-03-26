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
            <h1>Dashboard</h1>
          </div>
          {{-- card info --}}
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <a href="">
                  <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-box-open"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Product Aktiv</h4>
                  </div>
                  <div class="card-body">
                    10
                  </div>
                </div>
              </div>
              </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
             <a href="">
                  <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="fas fa-file-invoice"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Invoice Unpaid</h4>
                  </div>
                  <div class="card-body">
                    42
                  </div>
                </div>
              </div>
             </a>
            </div>
            {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Reports</h4>
                  </div>
                  <div class="card-body">
                    1,201
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Online Users</h4>
                  </div>
                  <div class="card-body">
                    47
                  </div>
                </div>
              </div>
            </div> --}}
          </div>
         {{-- Content --}}
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
</script>
@endpush
