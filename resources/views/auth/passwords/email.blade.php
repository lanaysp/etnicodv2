@extends('layouts.auth')

@section('title')
    Reset Password
@endsection

@section('content')
 <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="/images/etnicode_2.png" alt="logo" width="80" class="">
            </div>

            <div class="card card-primary">
             <div class="card-header"><h4> {{ __('Reset Password') }}</h4></div>

                 @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

              <div class="card-body">
                <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
            </div>


               <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                        Reset Password
                    </button>
                </div>
          </form>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy;  Etnicode Digital Solution {{ date('Y') }}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
{{-- <div class="page-content page-auth mt-5" id="register">
  <div class="section-store-auth" data-aos="fade-up">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4">

          <h2 class="mt-5">
            {{ __('Reset Password') }}
          </h2>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

          <form method="POST" action="{{ route('password.email') }}">
            @csrf

                <div class="form-group mt-3">
                    <label>{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button
                    type="submit"
                    class="btn btn-register btn-block"
                    :disabled="this.email_unavailable"
                    >
                    {{ __('Send Password Reset Link') }}
                </button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div> --}}
