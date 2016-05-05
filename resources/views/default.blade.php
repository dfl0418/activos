<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=7,8,9" />
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html" charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="img/logo.ico"> -->


    <title>@yield('titulo')</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet" media="screen">






    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- Estilo css para posicionarlo -->
    <style type="text/css">
        #bg{
            position:fixed;
            top:0;
            left:0;
            z-index:-1;
        }
    </style>


    <!--Añadimos codigo JAvaScript para redimensionar la imagen-->
    <script type="text/javascript">
        window.onload = function() {
            function bgadj(){
                var element = document.getElementById("bg");
                var ratio =  element.width / element.height;
                if ((window.innerWidth / window.innerHeight) < ratio){
                    element.style.width = 'auto';
                    element.style.height = '100%';
                    <!-- si la imagen es mas ancha que la ventana la centro -->
                    if (element.width > window.innerWidth){
                        var ajuste = (window.innerWidth - element.width)/2;
                        element.style.left = ajuste+'px';
                    }
                }
                else{
                    element.style.width = '100%';
                    element.style.height = 'auto';
                    element.style.left = '0';
                }
            }
            <!-- llamo a la función bgadj() por primera vez al terminar de cargar la página -->
            bgadj();
            <!-- vuelvo a llamar a la función  bgadj() al redimensionar la ventana -->
            window.onresize = function() {
                bgadj();
            }
        }
    </script>

    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom:  0;
            border-radius: 0;
            background-color: #e0001b;
            border-color:#212282;
            height: 100%;



        }
        a{
            color: #FFFFFF;
        }
        .navbar-inverse .navbar-brand {
            color: #FFFFFF;
        }
        .navbar-inverse .navbar-nav>li>a{
            color:#FFFFFF;}

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height: 450px}

        /* Set gray background color and 100% height */


        /* Set black background color, white text and some padding */
        footer {
            background-color: #212282;
            color: white;
            padding: 15px;
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
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/" class="navbar-brand"><font size=5>SCSAF</font></a>
            <!--/  <img  src="{{ asset('img/logo_eps.png') }}" class="img-rounded"/> -->

        </div>
        <div class="navbar-collapse collapse" id="navbar">
            <ul class="nav navbar-nav">
                @yield('navegacion')
                <li><a href="{{ url('/') }}"><font size=4>Incio</font></a></li>
                <li><a href="{{ url('about') }}"><font size=4>Acerca de</font></a></li>
                <li><a href="{{ url('auth/login') }}"><font size=4>Login</font></a></li>
                <li><a href="{{ url('auth/register') }}"><font size=4>Registrarse</font></a></li>




            </ul>

        </div><!--/.nav-collapse -->
    </div>
</nav>



<!--/<img id="bg" src="img/fondo.png"  alt="background" /> -->





<div class="container marketing">
    <hr class="featurette-divider">
    @yield('marketinig')



</div><!-- /.container -->


<!-- /END THE FEATURETTES -->
<hr class="featurette-divider">


<!-- FOOTER -->
<div class="container">
    @yield('derechos')

</div>



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->



</body>
</html>