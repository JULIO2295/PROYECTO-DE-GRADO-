<!DOCTYPE html>
<!--[if IE 8]>      <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>      <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>

  <!-- Meta -->
  <meta charset="utf-8">
  <meta name="keywords" content="HTML5 Template" />
  <meta name="description" content="Slander - Responsive HTML5 Landing Page">
  <meta name="author" content="dkpixels.com">

    <title>Sistema Niño Jesús</title>

  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicons -->
  <link rel="shortcut icon" href="{{ asset('recur/img/favicon.ico')}}">
  <link rel="apple-touch-icon" href="{{ asset('recur/img/apple-touch-icon.png')}}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('recur/img/apple-touch-icon-72x72.png')}}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('recur/img/apple-touch-icon-114x114.png')}}">
  <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('recur/img/apple-touch-icon-144x144.png')}}">

  <!-- Google Webfonts -->
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,300,300italic,400italic,500,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,100,100italic,200,300,300italic,400italic,500,700,900' rel='stylesheet' type='text/css'>

    <!-- CSS -->
    <link href="{{ asset('recur/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('recur/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('recur/js/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{ asset('recur/js/owl-carousel/owl.theme.css')}}" rel="stylesheet">
    <link href="{{ asset('recur/js/owl-carousel/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{ asset('recur/js/easytabs/easy-responsive-tabs.css')}}" rel="stylesheet"/>
    <link href="{{ asset('recur/js/flex-slider/flexslider.css')}}" rel="stylesheet" />
    <link href="{{ asset('recur/css/prettyphoto.css')}}" rel="stylesheet" />
    <link href="{{ asset('recur/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('recur/css/style-responsive.css')}}" rel="stylesheet">

  <!-- Add custom CSS here -->
  <link href="{{ asset('recur/css/custom.css')}}" rel="stylesheet">

  <!--[if lt IE 9]>
        <script src="./js/html5shiv.js"></script>
        <script src="./js/respond.js"></script>
  <![endif]-->

</head>
  <body id="page-top">

<!-- Outer-wrap -->
<div class="outer-wrap">
  <div class="container">
  
    <!-- Fixed Left Navigaton -->
    <div class="col-md-3 m-left">
    
      <!-- Navmenu -->
      <header>
        <nav class="navbar navbar-default">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="{{ asset('recur/img/logo.png')}}" class="img-responsive" alt=""/></a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right menu-effect">
              <li class="current"><a href="{{ route('materias')}}" data-hover="MODULOS">MODULOS</a></li>
              @foreach ($modulos as $mo) <!--es un bucle-->
              <li class="btn btn-{{$mo->color}}" class="active"><a href="{{ route('showmodulos', $mo->idmodulo) }}" data-hover="{{$mo->nombre}}" >{{$mo->nombre}}</a></li>
              @endforeach
            </ul>
          </div>
        </nav>
        <!-- Navmenu -->
        
        <!-- Hidden Content -->
        <div class="m-header">
          <ul class="mh-social">
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
          </ul>
          <p class="mh-copy">&copy; 2014 Momental, All Rights Reserved</p>
        </div>
        <div class="m-hide"><i class="fa fa-plus-circle"></i></div>
        <!-- Hidden Content -->
        
      </header>
    </div>
    <!-- Fixed Left Navigaton - END -->
    
    <!-- Right Main Content -->
    <div class="col-md-9 m-right">



    @if(Request::is('materias'))
      <!-- Intro Slider -->
      <div class="row" data-animated="0">
        <div class="col-md-12">
          <div id="intro">
            <div id="intro-slider" class="owl-carousel owl-theme">
              <div class="item"><img src="{{ asset('recur/img/slider/intro/niños.jpg')}}" class="img-responsive" alt=""></div>
              <div class="item"><img src="{{ asset('recur/img/slider/intro/niños2.jpg')}}" class="img-responsive" alt=""></div>
              <div class="item"><img src="{{ asset('recur/img/slider/intro/niños3.jpg')}}" class="img-responsive" alt=""></div>
            </div>
          </div>
        </div>
      </div>
      
      @endif



       @yield('content')
      
      <!-- Services Content -->
      <!-- Tab content -->
     
      
    
      
      <!-- Home-Shop -->
      
      

      
      <!-- Footer - copyright -->

    </div>
    <!-- Right Main Content - END -->
  </div>
</div>
<!-- Outer-wrap - END -->

<!-- jQuery -->
<script src="{{ asset('recur/js/jquery.js')}}"></script>
<script src="{{ asset('recur/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('recur/js/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{ asset('recur/js/easytabs/easyResponsiveTabs.js')}}"></script>
<script src="{{ asset('recur/js/jflickrfeed.min.js')}}"></script>
<script src="{{ asset('recur/js/jquery.easing.min.js')}}"></script>
<script src="{{ asset('recur/js/flex-slider/jquery.flexslider.js')}}"></script>
<script src="{{ asset('recur/js/jCProgress-1.0.3.js')}}"></script>
<script src="{{ asset('recur/js/jquery.appear.js')}}"></script>
<script src="{{ asset('recur/js/jquery.inview.js')}}"></script>
<script src="{{ asset('recur/js/jquery.prettyphoto.js')}}"></script>
<script src="{{ asset('recur/js/jquery.nicescroll.js')}}"></script>
<script src="{{ asset('recur/js/contact.js')}}"></script>
<script src="{{ asset('recur/js/main.js')}}"></script>

<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="{{ asset('recur/js/gmaps.js')}}"></script>

</body>
</html>