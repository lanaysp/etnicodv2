<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>

  @stack('perpend-style')
    @include('includes.style-admin')
    @stack('addon-style')


</head>

<body>
  <div id="app">
    <div class="main-wrapper">
        @include('includes.navbar-user')


      <!-- Main Content -->
      @yield('content')


    @include('includes.footer-admin')

    @include('sweetalert::alert')
    @stack('perpend-script')
    @include('includes.script-admin')
    @stack('addon-script')


