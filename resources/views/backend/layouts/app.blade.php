<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="This is the description of the website">
    <meta name="author" content="Mohamed Samir">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="img/logo-fav.png">
    <title>{{ config('app.name', '4Soft') }}</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/material-design-icons/css/material-design-iconic-font.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('lib/perfect-scrollbar/css/perfect-scrollbar.css') }}"/>
    @stack('css')

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>

    @if(!auth()->check())
    <div class="be-splash-screen">
    @endif
    @php $routes = ['contacts.index', 'contacts.create', 'contacts.show', 'contacts.inbox', 'contacts.favourite', 'contacts.trash']  @endphp
    <div class="be-wrapper @if( in_array(Request::route()->getName(), $routes ) ) be-aside be-fixed-sidebar @endif">
        @auth
            @include('backend.layouts.navbar')

            @include('backend.layouts.sidebar')
        @endauth

        <div class="be-content">
            @yield('content')
        </div>

    </div>

    @if(!auth()->check())
    </div>
    @endif

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('lib/perfect-scrollbar/js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @stack('js')
    <script>
        $(document).ready(function(){
            App.init();
        });
    </script>
</body>
</html>
