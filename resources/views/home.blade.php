<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta content="" name="description">
    <meta content="" name="author">


    <title>Login De SISCAF</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/default.css') }}" rel="stylesheet">
    <script type="text/javascript" src="js/autocomplete.js"></script>
    <script type="text/javascript" src="js/widget.js"></script>
    <script type="text/javascript" src="js/addanother.js"></script>
    <script type="text/javascript" src="js/text_widget.js"></script>
    <script type="text/javascript" src="js/remote.js"></script>
    <link rel="stylesheet" type="text/css" href="js/style.css">





    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom:  0;
            border-radius: 0;
            background-color: #e0001b;
            border-color:#212282;
            height: 100%;



        }
        .navbar-inverse .navbar-brand {
            color: #FFFFFF;
        }
        .navbar-inverse .navbar-nav>li>a{
            color:#FFFFFF;
            background-color: #e0001b;
            border-color:#212282;
        }

        .navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:focus, .navbar-inverse .navbar-nav>.open>a:hover{

            color:#FFFFFF;
            background-color: #e0001b;
            border-color:#212282;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height: 450px}

        /* Set gray background color and 100% height */


        /* Set black background color, white text and some padding */
        footer {

            position: absolute;
            bottom: 0;
            width: 100%;
            padding-left: 10px;
            padding-right: 10px;
            height: 60px;
            background-color: #303192;
            color: #fff;

        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height:auto;}
        }
    </style>
</head>


<body>

<!-- Static navbar -->
<div class="navbar-wrapper">


        <nav class="navbar navbar-inverse navbar-static-top" role="navigation" >
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="/" class="navbar-brand"><font size=5>SCSAF</font></a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <ul class="nav navbar-nav">


                        @yield('navegacion')
                        <li class="dropdown">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Carga de Datos<span class="caret"></span></a>

                        <ul class="dropdown-menu">
                        <li><a href="{{ url('categoria') }}">Categorias</a></li>
                        <li><a href="{{ url('activo') }}">Activos</a></li>
                        <li><a href="{{ url('centrocosto') }}">Centro De Costos</a></li>
                        <li><a href="{{ url('sede') }}">Sedes</a></li>
                        <li><a href="{{ url('oficina') }}">Oficinas</a></li>
                        <li><a href="{{ url('ubicacion') }}">Ubicaciones</a></li>
                        <li><a href="{{ url('cargo') }}">Cargos</a></li>
                        <li><a href="{{ url('perfil') }}">Perfiles</a></li>
                        <li><a href="{{ url('funcionario') }}">Funcionarios</a></li>
                        <li><a href="{{ url('programa') }}">Programas</a></li>

                            </ul>
                    </ul>


                    </li>

                    <ul class="nav navbar-nav navbar-right">

                        <li class="dropdown">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bienvenid@ {{ @Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu">

                                <li><a href="#">Cambiar contraseña</a></li>
                                <li><a href="#">Mi Perfil</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Salir</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


</div>


<div class="container">

    @yield('content')
            <!-- Main component for a primary marketing message or call to action -->
</div> <!-- /container -->



<!-- Footer del proyecto -->
<div class="separator"></div>
<!-- <nav class="navbar navbar-default navbar-fixed-bottom" role="navigation"> -->

<footer class="footer">

    <p>
    <p class="pull-right"><a href="#">VOLVER ARRIBA</a></p>
    <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacidad</a> &middot; <a href="#">Terminos</a> &middot; <a href="http://www.gnu.org/licenses/gpl-2.0.html" target="_blank">Licencia</a>  &middot; </p>
    </p>
    <!-- Bootstrap core JavaScript<a href="./">Fixed top</a>
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jstooltip.js"></script>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->



</body></html>