<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    




    <link rel="icon" type="image/png" href="{{ asset('rec/images/icons/favicon.ico')}}"/>

    <link rel="stylesheet" type="text/css" href="{{ asset('rec/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('rec/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('rec/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('rec/vendor/animate/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('rec/vendor/css-hamburgers/hamburgers.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('rec/vendor/animsition/css/animsition.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('rec/vendor/select2/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('rec/vendor/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('rec/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('rec/css/main.css')}}">






    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<style type="text/css">
    .container-login100 {
    background: url("{{asset('rec/images/bg.jpg')}}") no-repeat center center;
    background-size: cover;  
    }
   
</style>

</head>
<body>
    <div id="app">
    <!--    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    Left Side Of Navbar 
                    <ul class="navbar-nav mr-auto">

                    </ul>

                   
                    <ul class="navbar-nav ml-auto">
                       
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> -->

        <main class="py-12">
            @yield('content')
        </main>
    </div>


    <script src="{{ asset('rec/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset('rec/vendor/animsition/js/animsition.min.js')}}"></script>
    <script src="{{ asset('rec/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{ asset('rec/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('rec/vendor/daterangepicker/moment.min.rec')}}"></script>
    <script src="{{ asset('rec/vendor/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{ asset('rec/vendor/countdowntime/countdowntime.js')}}"></script>
    <script src="{{ asset('rec/js/main.js')}}"></script>



</body>
</html>
