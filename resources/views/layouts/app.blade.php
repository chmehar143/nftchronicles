<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Home -  NFT Chronicles">
    <!-- Title-->
    <title>Home -  NFT Chronicles</title>
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('img/core-img/favicon.ico')}}" type="image/x-icon">
    <!-- All CSS Stylesheet-->
    <link rel="stylesheet" href="{{ asset('css/all-css-libraries.css')}}">
    <!-- Core Stylesheet-->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/new.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS only -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body>
<!-- Preloader-->
<div class="preloader" id="preloader">
    <div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div>
</div>

@include('layouts.header')
@yield('content')
@include('layouts.footer')


<div id="scrollTopButton"><i class="bi bi-arrow-up-short"></i></div>
<!-- All JavaScript Files-->
<script src="{{ asset('js/all-js-libraries.js')}}"></script>
<script src="{{ asset('js/active.js')}}"></script>
<script src="{{ asset('js/charts.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</body>

</html>


