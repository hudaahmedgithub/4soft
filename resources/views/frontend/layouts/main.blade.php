<!DOCTYPE html>
<html class="no-js">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>4Soft - Computer Service Corp</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

  <!-- Favicon-->
  <link rel="shortcut icon" href="{{ asset('front/images/favicon.png') }}" >

  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{ asset('front/css/normalize.css') }}">
  <link rel="stylesheet" href="{{ asset('front/font/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('front/libs/materialize/css/materialize.min.css') }}" media="screen,projection" />
  <link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}" media="screen,projection" />

  <link rel="stylesheet" href="{{ asset('front/css/animate.min.css') }}" media="screen,projection" />
  <link rel="stylesheet" href="{{ asset('front/libs/sweetalert/sweet-alert.css') }}" media="screen,projection" />

  <link rel="stylesheet" href="{{ asset('front/libs/owl-carousel/owl.carousel.css') }}" media="screen,projection" />
  <link rel="stylesheet" href="{{ asset('front/libs/owl-carousel/owl.transitions.css') }}" media="screen,projection" />
  <link rel="stylesheet" href="{{ asset('front/libs/owl-carousel/owl.theme.css') }}" media="screen,projection" />

  <link rel="stylesheet" href="{{ asset('front/css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}">

  <link rel="stylesheet" href="{{ asset('front/css/colors/color1.css') }}">

  <!--[if lt IE 9]>
      <script src="{{ asset('front/js/html5shiv.js') }}"></script>
  <![endif]-->

  @stack('style')
</head>

<body>
    
    @yield("content")
   
    <!-- JavaScripts -->
    <script src="{{ asset('front/js/jquery.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('front/js/detectmobilebrowser.js') }}"></script>
    <script src="{{ asset('front/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('front/js/wow.min.js') }}"></script>
    <script src="{{ asset('front/js/waypoints.js') }}"></script>
    <script src="{{ asset('front/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('https://maps.google.com/maps/api/js?sensor=true') }}"></script>
    <script src="{{ asset('front/js/gmaps.js') }}"></script>
    <script src="{{ asset('front/libs/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front/libs/materialize/js/materialize.min.js') }}"></script>
    <script src="{{ asset('front/libs/jwplayer/jwplayer.js') }}"></script>
    <script src="{{ asset('front/libs/sweetalert/sweet-alert.min.js') }}"></script>
    <script src="{{ asset('front/js/common.js') }}"></script>
    <script src="{{ asset('front/js/main.js') }}"></script>
    @stack('script')
</body>
</html>
