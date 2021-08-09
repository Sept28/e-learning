<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
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

    ul, li {
        list-style: none;
    }
  
    #wrapper {
        width: 900px;
        margin: 20px auto;
    }
  
    .data-container {
        margin-top: 20px;
    }
  
    .data-container ul {
        padding: 0;
        margin: 0;
    }
  
    .data-container li {
        margin-bottom: 5px;
        padding: 5px 10px;
        background: #eee;
        color: #666;
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