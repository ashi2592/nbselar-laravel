<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'Flower Shop') }}</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.css') }}"  class="bootstrap-css" >
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" class="style-css"/>
  <link rel="stylesheet" href="{{ asset('assets/fonts.css') }}" />
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
@include('front.layouts.partials.header')   
@yield('content')
@include('front.layouts.partials.footer')
</body>
</html>      