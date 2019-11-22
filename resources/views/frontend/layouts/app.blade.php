
<!DOCTYPE html>
<html class="no-js">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('app.name', '4Soft - Computer Service Corp') }}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="4Soft is a software house">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

  <!-- Favicon-->
  <link rel="shortcut icon" href="{{ url('front/images/favicon.png') }}" >

  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{ url('front/css/normalize.css') }}">
  <link rel="stylesheet" href="{{ url('front/font/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ url('front/libs/materialize/css/materialize.min.css') }}" media="screen,projection" />
  <link rel="stylesheet" href="{{ url('front/css/bootstrap.css') }}" media="screen,projection" />

  <link rel="stylesheet" href="{{ url('front/css/animate.min.css') }}" media="screen,projection" />
  <link rel="stylesheet" href="{{ url('front/libs/sweetalert/sweet-alert.css') }}" media="screen,projection" />

  <link rel="stylesheet" href="{{ url('front/libs/owl-carousel/owl.carousel.css') }}" media="screen,projection" />
  <link rel="stylesheet" href="{{ url('front/libs/owl-carousel/owl.transitions.css') }}" media="screen,projection" />
  <link rel="stylesheet" href="{{ url('front/libs/owl-carousel/owl.theme.css') }}" media="screen,projection" />

  <link rel="stylesheet" href="{{ url('front/css/main.css') }}">
  <link rel="stylesheet" href="{{ url('front/css/responsive.css') }}">

  <link rel="stylesheet" href="{{ url('front/css/colors/color1.css') }}">

  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
  <![endif]-->
    <style>
        .protfolio-image {
            height: 298px;
            width: 376px;
        }
        .activator {
            width: 295px;
            height: 295px;
        }
    </style>
</head>

<body>

    {{-- Navbar --}}
    @include('frontend.layouts.navbar')

    @yield('content')

        <!-- Footer Section end -->
        <footer id="footer" class="root-sec white root-sec footer-wrap">
        <div class="container">
            <div class="row">
            <div class="col-sm-12">
                <div class="clearfix footer-inner">
                <ul class="left social-icons">
                    <li>
                        <a href="#" class="tooltips tooltipped facebook" data-position="top" data-delay="50" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#" class="tooltips tooltipped linkedin" data-position="top" data-delay="50" data-tooltip="Linkdin"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li><a href="#" class="tooltips tooltipped twitter" data-position="top" data-delay="50" data-tooltip="Twitter"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#" class="tooltips tooltipped google-plus" data-position="top" data-delay="50" data-tooltip="Google Plus"><i class="fa fa-google-plus"></i></a>
                    </li>
                    <li><a href="#" class="tooltips tooltipped dribbble" data-position="top" data-delay="50" data-tooltip="Dribbble"><i class="fa fa-dribbble"></i></a>
                    </li>
                    <li><a href="#" class="tooltips tooltipped behance" data-position="top" data-delay="50" data-tooltip="Behance"><i class="fa fa-behance"></i></a>
                    </li>
                </ul> <!-- ./social icons end -->
                <div class="right copyright">
                    <p>4Soft &copy; All Rights Reserved</p>
                </div>
                </div>
            </div>
            </div>
        </div> <!-- ./container end-->
        </footer>
        <!-- #footer end -->

    </main>
    <!-- Main Container end-->

    <!-- JavaScripts -->
    <script type="text/javascript" src="{{ url('front/js/jquery.min.js') }}"></script>
    <script src="{{ url('front/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ url('front/js/detectmobilebrowser.js') }}"></script>
    <script src="{{ url('front/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('front/js/wow.min.js') }}"></script>
    <script src="{{ url('front/js/waypoints.js') }}"></script>
    <script src="{{ url('front/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ url('front/js/jquery.nicescroll.min.js') }}"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="{{ url('front/js/gmaps.js') }}"></script>
    <script src="{{ url('front/libs/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ url('front/libs/materialize/js/materialize.min.js') }}"></script>
    <script src="{{ url('front/libs/jwplayer/jwplayer.js') }}"></script>
    <script src="{{ url('front/libs/sweetalert/sweet-alert.min.js') }}"></script>
    <script src="{{ url('front/js/common.js') }}"></script>
    <script src="{{ url('front/js/main.js') }}"></script>
    @stack('script')
</body>

</html>
