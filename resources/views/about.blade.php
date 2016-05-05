@extends('default2')

@section('titulo')
    Acerca de SCSAF
    @endsection

    @section('content')



            <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide" src="img/banner.png" alt="First slide">

            </div>

            <div class="item">
                <img class="second-slide" src="img/banner2.png" alt="Second slide">

            </div>
            <div class="item">
                <img class="third-slide" src="img/banner3.png" alt="Third slide">

            </div>
        </div>

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div><!-- /.carousel -->

    <div>
        <br>
    </div>

    <div class="jumbotron">
        <h1>SCSAF</h1>
        <p align="justify">
        </p>
    </div>


    <div class="jumbotron">
        <h1>CONTACTENOS</h1>
        <p align="justify">Instituto Tolimense de Formación Técnica Profesional - NIT. 800173719-0</p>
        <p align="justify">Calle 18 Carrera 1ª Barrio/Arkabal Espinal, Tolima - Colombia</p>
        <p align="justify">Tels. (57+8)2483501-2483503-2480014-2480110 Fax: 2483502</p>
        <p align="justify">Atención al ciudadado Ext: 1200</p>
        <p align="justify">e-mail: info@itfip.edu.co</p>
        <p align="justify">Horario de Atención: Lunes a Viernes de 8:00 a.m. - 12:00 p.m. y de 2:00 p.m. - 6:00 p.m.</p>
    </div>
    @endsection


    <!-- FOOTER -->
@section('derechos')

        <footer>
            <p class="pull-right"><a href="#">VOLVER ARRIBA</a></p>
            <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacidad</a> &middot; <a href="#">Terminos</a> &middot; <a href="http://www.gnu.org/licenses/gpl-2.0.html" target="_blank">Licencia</a>  &middot; </p>
        </footer>
  <!-- /.container -->




@endsection
