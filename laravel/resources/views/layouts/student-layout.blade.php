<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/studentnew-custom.css') }}">    
</head>
<body>
    @include('studentnew.layouts.includes.header')
    @section('main-content')
    @show
    @include('studentnew.layouts.includes.footer')
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/studentnew-custom.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>    
</body>
</html>