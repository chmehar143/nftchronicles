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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <!-- <link rel="stylesheet" href="app/bootstrap/css/bootstrap.css"> -->
   <link rel="stylesheet" href="app/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="app/dist/app.css">
    <link rel="stylesheet" href="assets/font/font-awesome.css"> 

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
<script src="app/js/jquery.min.js"></script>
    <script src="app/js/bootstrap.min.js"></script>
    <script src="app/js/swiper-bundle.min.js"></script>
    <script src="app/js/swiper.js"></script>
    <script src="app/js/app.js"></script>
    <script src="app/js/jquery.easing.js"></script>
    <script src="../unpkg.com/aos%402.3.1/dist/aos.js"></script>
     <script src="app/js/parallax.js"></script>
     <script src="app/js/jquery.magnific-popup.min.js"></script>
     <script>
         (function ($) {
  "use strict";
  // Auto-scroll
  $('#myCarouselone').carousel({
    interval: 5000
  });

  // Control buttons
  $('.next').click(function () {
    $('.carousel').carousel('next');
    return false;
  });
  $('.prev').click(function () {
    $('.carousel').carousel('prev');
    return false;
  });

  // On carousel scroll
  $("#myCarouselone").on("slide.bs.carousel", function (e) {
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $(".carousel-item").length;
    if (idx >= totalItems - (itemsPerSlide - 1)) {
      var it = itemsPerSlide -
          (totalItems - idx);
      for (var i = 0; i < it; i++) {
        // append slides to end 
        if (e.direction == "left") {
          $(
            ".carousel-item").eq(i).appendTo(".carousel-inner");
        } else {
          $(".carousel-item").eq(0).appendTo(".carousel-inner");
        }
      }
    }
  });
})
(jQuery);
         </script>

</body>

</html>


