<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>

  {{-- Style --}}
  @stack('prepend-style')
  @include('includes.style')
  @stack('addon-style')
  
  <style>

    html {
      scroll-behavior: smooth;
    }
    
    body{
     font-family: 'Nunito', sans-serif;
    }
  </style>
</head>
<body style="background-color: #F6F8FD">
  {{-- Navbar --}}
    @include('includes.navbar')

    <!-- Pages -->
    @yield('content')
    
    {{-- Footer
    @include('includes.footer') --}}

    {{-- Script --}}
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
</body>
</html>