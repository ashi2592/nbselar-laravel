<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/" >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <title>{{ config('app.name', 'Nbselar') }}</title>
  <meta name="description" content="" />
  <link rel="icon" type="image/x-icon" href="{{ asset('/img/favicon/favicon.ico')}}" />
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('vendor/fonts/boxicons.css')}}" />
  <!-- Theme style -->
  <link rel="stylesheet" href="{{URL::asset('vendor/css/core.css') }}"  class="template-customizer-core-css" >
  <link rel="stylesheet" href="{{ asset('vendor/css/theme-default.css') }}" class="template-customizer-theme-css"/>
  <link rel="stylesheet" href="{{ asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
  <script src="{{ asset('vendor/js/helpers.js')}}"></script>
  <script src="{{ asset('vendor/js/config.js')}}"></script>
</head>
<body>
<!-- Site wrapper -->
<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
    <!-- Main Sidebar Container -->
    @include('back.layouts.partials.sidebar')
    <!-- Navbar -->
 
    <!-- /.navbar -->
    <!-- Content Wrapper. Contains page content -->
    <div class="layout-page">
      <!-- Content Header (Page header) -->
      @include('back.layouts.partials.header')
      <!-- Content wrapper -->
      <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                      <!------------------------------- ********************** working area ********************** ---------------------------------------> 
                      <!-- edit -->
                      
                      @yield('content')
                      
                      <!-- edit / -->
                      <!------------------------------- ********************** working area ********************** ---------------------------------------> 
                    </div>
                    <!-- / Content -->               
                    @include('back.layouts.partials.footer')