<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png')}}">
    <title>Sistema Escuela Niño Jesús</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css')}} " rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css')}}">
    <!-- chartist CSS -->
    <link href="{{ asset('plugins/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{ asset('plugins/chartist-js/dist/chartist-init.css')}}" rel="stylesheet">
    <link href="{{ asset('plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="{{ asset('plugins/c3-master/c3.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{ asset('css/colors/blue.css')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{ asset('css/brands.css')}}">
    <link rel="stylesheet" href="{{ asset('css/solid.css')}}">
    <link rel="stylesheet" href="{{ asset('css/sweetalert.min.css')}}">
  
    

<style type="text/css">
    .user-profile {
    background: url("{{asset('images/background/profile-bg.jpg')}}");
      
    }
   
</style>


</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            
                            <!-- Light Logo icon -->
                            <img src="{{ asset('images/logo-light-icon.png')}}" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         
                         <!-- Light Logo text -->    
                         <img src="{{ asset('images/logoo.png')}}" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                     
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><img src="{{ asset('imagenes/usuarios/'.Auth::user()->imagen)}}" alt="user" class="profile-pic"></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up show">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="{{ asset('imagenes/usuarios/'.Auth::user()->imagen)}}" alt="user"></div>
                                            <div class="u-text">
                                                <h4>{{Auth::user()->nombre.' '.Auth::user()->apellidos}}</h4>
                                                <p class="text-muted">{{Auth::user()->email}}</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">Mi Perfil</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{ route('logout') }}"><i class="fa fa-power-off"></i> Cerrar Sesión</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
			
			
			
			<div class="user-profile" style="background: url(asset('imagenes/usuarios/'.Auth::user()->imagen)) no-repeat;">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="{{ asset('imagenes/usuarios/'.Auth::user()->imagen)}}" alt="user"> </div>
                    <!-- User profile text-->
                    <div class="profile-text"> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">{{Auth::user()->nombre.' '.Auth::user()->apellidos}}</a>
                        <div class="dropdown-menu animated flipInY"> <a href="#" class="dropdown-item"><i class="ti-user"></i>
                                Mi Perfil</a>
                          
                            <div class="dropdown-divider"></div> <a href="{{ route('logout') }}" class="dropdown-item"><i class="fa fa-power-off"></i>
                                Cerrar Sesión</a>
                        </div>
                    </div>
                </div>
			
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="active"> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Estadisticas</span></a>
                        </li>

                        <li class=""> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fas fa-users"></i><span class="hide-menu">  Cursos</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{url('cursos/profesor')}}"><i class="fas fa-hand-point-right"></i>  Profesores</a></li>
                                <li><a href="{{url('cursos/curso')}}"><i class="fas fa-hand-point-right"></i>  Cursos</a></li>
                                <li><a href="{{url('cursos/discapacidad')}}"><i class="fas fa-hand-point-right"></i>  Discapacidad</a></li>
                                <li><a href="{{url('cursos/estudiante')}}"><i class="fas fa-hand-point-right"></i>  Estudiantes</a></li>
                            </ul>
                        </li>
                        <li class=""> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fas fa-users"></i><span class="hide-menu">  Seguridad</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{url('seguridad/rol')}}"><i class="fas fa-hand-point-right"></i>  Roles</a></li>
                                <li><a href="{{url('seguridad/usuario')}}"><i class="fas fa-hand-point-right"></i>  Usuarios</a></li>
                            </ul>
                        </li>
                        <li class=""> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fas fa-book-open"></i><span class="hide-menu">  Módulos</span></a>
                                <ul aria-expanded="false" class="collapse">
                                <li><a href="{{url('modulos/modulos')}}"><i class="fas fa-hand-point-right"></i>  Módulos</a></li>
                                <li><a href="{{url('modulos/contenido')}}"><i class="fas fa-hand-point-right"></i>  Contenido</a></li>
                                <li><a href="{{url('modulos/actividad')}}"><i class="fas fa-hand-point-right"></i>  Actividades</a></li>
                            </ul>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><i class="fas fa-info-circle"></i><span class="hide-menu">  Información</span></a>
                        </li>
                    </ul>
   
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->

            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">

                <div class="row page-titles">
                    <div class="col-md-10 col-10 align-self-center" style="text-align: center;color: white;">
                        <h3 style="color: white;text-shadow: 2px 0 0 #000, -2px 0 0 #000, 0 2px 0 #000, 0 -2px 0 #000, 1px 1px #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000;font-size: 30px">Sistema Multimedia Escuela Niño Jesús</h3>
                      
                    </div>

                </div>


                
                <div class="row">
                  <div class="col-12">
                        <div class="card">
                            <div class="card-block">
                                
                                @yield('contenido')
                             </div>
                  </div>
            </div>
	   </div>
    </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2019 JUANCHI SYSTEM </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
    @stack('scripts')
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('plugins/bootstrap/js/tether.min.js')}}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap-select.min.js')}}"></script> 
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{ asset('plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('js/custom.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="{{ asset('plugins/chartist-js/dist/chartist.min.js')}}"></script>
    <script src="{{ asset('plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <!--c3 JavaScript -->
    <script src="{{ asset('plugins/d3/d3.min.js')}}"></script>
    <script src="{{ asset('plugins/c3-master/c3.min.js')}}"></script>
    <!-- Chart JS -->
    <script src="{{ asset('js/dashboard1.js')}}"></script>
    <script src="{{ asset('js/fontawesome.js')}}"></script>
    <script src="{{ asset('js/brands.js')}}"></script>
    <script src="{{ asset('js/solid.js')}}"></script>
    <script src="{{asset('js/sweetalert.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap-show-password.min.js')}}"></script>
    <script src="{{ asset('js/jsvalidation.js')}}"></script>
    <script src="{{ asset('/vendor/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('/vendor/ckfinder/ckfinder.js') }}"></script>
    <script src="{{ asset('js/bootstrap-validate.js') }}"></script>
    <script>

    CKEDITOR.replace( 'body', {
    filebrowserBrowseUrl: 'http://127.0.0.1:8000/vendor/ckfinder/ckfinder.html',
    filebrowserUploadUrl: 'http://127.0.0.1:8000/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
    } );
      

    </script>

</body>

</html>