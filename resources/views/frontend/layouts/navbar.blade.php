 <!-- Preloader --> 
 <div id="preloader">
    <div class="loader">
        <svg class="circle-loader" height="50" width="50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="6" stroke-miterlimit="10" />
        </svg>
    </div>    
</div><!--preloader end-->
  <!-- Favicon-->
  <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" >

  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
  <link rel="stylesheet" href="{{asset('font/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('libs/materialize/css/materialize.min.css')}}" media="screen,projection" />
  <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" media="screen,projection" />

  <link rel="stylesheet" href="{{asset('css/animate.min.css')}}" media="screen,projection" />
  <link rel="stylesheet" href="{{asset('libs/sweetalert/sweet-alert.css')}}" media="screen,projection" />

  <link rel="stylesheet" href="{{asset('libs/owl-carousel/owl.carousel.css')}}" media="screen,projection" />
  <link rel="stylesheet" href="{{asset('libs/owl-carousel/owl.transitions.css')}}" media="screen,projection" />
  <link rel="stylesheet" href="{{asset('libs/owl-carousel/owl.theme.css')}}" media="screen,projection" />

  <link rel="stylesheet" href="{{asset('/main.css')}}">
  <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

  <link rel="stylesheet" href="{{asset('css/colors/color1.css')}}">
  <link rel="stylesheet" href="{{asset('css/editing.css')}}">
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>courses</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('blog/blog.css')}}">
    </head>

<!-- Main Container -->
<main id="app" class="main-section">
	
	 <div class="platforms-list">
      <ul>
        <li><a href="{{route('courses_objectives')}}">4Soft Dev</a></li>
        <li><a href="../sales/platform-objectives.html">Sales Link</a></li>
      </ul>
    </div>
    <!-- header navigation start -->
    <header id="navigation" class="root-sec white nav">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="nav-inner">
              <nav class="primary-nav">
                <div class="clearfix nav-wrapper">
                  <a href="#home" class="left brand-logo menu-smooth-scroll" data-section="#home">
                    <img src="{{ url('front/images/final logo-06.png') }}" alt="">
                  </a>
                  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                  {{--
                  <ul class="right static-menu">
                    <li class="search-form-li">
                      <a id="initSearchIcon" class=""><i class="mdi-action-search"></i> </a>
                      <div class="search-form-wrap hide">
                        <form action="#" class="">
                          <input type="search" class="search">
                          <button type="submit"><i class="mdi-action-search"></i>
                          </button>
                        </form>
                      </div>
                    </li>
                  </ul>
                  --}}
                  <ul class="inline-menu side-nav" id="mobile-demo">

                  <!-- Mini Profile // only visible in Tab and Mobile -->
                    <li class="mobile-profile">
                     <div class="profile-inner">
                        <div class="pp-container">
                            <img src="{{ url('front/images/person.png') }}" alt="">
                        </div>
                        <h3>4Soft Corp</h3>
                        <h5>Creative Computer Developers</h5>
                      </div>
                    </li><!-- mini profile end-->


                    @auth('customer')
                    <li><a href="{{ route('customer.login') }}" class="active"><i class="fa fa-sign-in fa-fw"></i>Logout</a>
                    </li>
                    @else
				
					  <li><a id="platforms" href="#" data-section="#1" class="menu-smooth-scroll"><i class="fa fa-user fa-fw"></i>Platforms</a>
                    <li><a href="#about" data-section="#about" class="menu-smooth-scroll"><i class="fa fa-user fa-fw"></i>About Us</a>
                    </li>
                    <li><a href="#resume" data-section="#resume" class="menu-smooth-scroll"><i class="fa fa-file-text fa-fw"></i>Service</a>
                    </li>
                    <li><a href="#portfolio" data-section="#portfolio" class="menu-smooth-scroll"><i class="fa fa-briefcase fa-fw"></i>Portfolio</a>
                    </li>
                    <li><a href="#team" data-section="#team" class="menu-smooth-scroll"><i class="fa fa-file-text fa-fw"></i>Team</a>
                    </li>
                    <li><a href="#contact" data-section="#contact" class="menu-smooth-scroll"><i class="fa fa-paper-plane fa-fw"></i>Contact</a>
                    </li>
                    <li><a href="{{ route('customer.login') }}" class="active"><i class="fa fa-sign-in fa-fw"></i>Sign in</a>
                    </li>
                    @endauth
                  </ul>

                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- .container end -->
    </header>
    <!-- #header  navigation end -->
	
	<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('js/detectmobilebrowser.js')}}"></script>
  <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('js/wow.min.js')}}"></script>
  <script src="{{asset('js/waypoints.js')}}"></script>
  <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
  <script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
  <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
  <script src="{{asset('js/gmaps.js')}}"></script>
  <script src="{{asset('libs/owl-carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('libs/materialize/js/materialize.min.js')}}"></script>
  <script src="{{asset('libs/jwplayer/jwplayer.js')}}"></script>
  <script src="{{asset('libs/sweetalert/sweet-alert.min.js')}}"></script>
  <script src="{{asset('js/common.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>
  <script>
    $(document).ready(function () {

      'use stict';
      $('#platforms').click(function () {

        $('.platforms-list').fadeToggle(100);

      });
    });
  </script>