 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <meta content="" name="description">
  <meta content="" name="keywords">

<title>@yield('title')</title>

    {{-- style --}}
    @stack('perpend-style')
    @include('includes.style')
    @stack('addon-style')
    @include('includes.navbar')


    {{-- page content --}}
    @include('includes.navbar-menu')
    @yield('content')

    {{-- footer --}}
    @include('includes.footer')

    @include('sweetalert::alert')

    {{-- script --}}
    @stack('perpend-script')
    @include('includes.script')
    @stack('addon-script')


    </body>
</html>
