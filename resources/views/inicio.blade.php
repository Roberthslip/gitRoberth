@extends("home");

@section('title','Inicio');

@section("content")

    <div id="myCarousel" class="carousel slide visible-lg" data-ride="carousel" xmlns="http://www.w3.org/1999/html">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" id="carrusel" style="width: 1140px;height: 400px" role="listbox">
            <div class="item active">
                <img src={{"imagenes/anuncios/1.jpg"}} alt="">
            </div>
            @for($i=2;$i<5;$i++)
                <div class="item">
                    <img src={{"imagenes/anuncios/".$i.".jpg"}} alt="">
                </div>
            @endfor
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <h2 class="text-danger text-center" style="margin:50px 0">Tendencias Mundiales:</h2>

    @forelse($posteos as $posteo)

        <div class="row" style="margin-bottom: 50px">
            <div class="col-lg-6 visible-lg visible-md">
        <img src="imagenes/posteos/{{$posteo->imagen}}.jpg" class="img-responsive">
            </div>
            <div class="col-lg-6 col-xs-12">

                <h3 class="text-danger">{{$posteo->titulo}}</h3>
                <p style="color:white;font-size: 14px">{{$posteo->descripcion}}</p><br>
                <p style="color:grey">Publicado por: <span class="text-success">@if(isset($posteo->cliente->nombre) && isset($posteo->cliente->apellido))
                            {{$posteo->cliente->nombre}} {{$posteo->cliente->apellido}}</span></p>
                @endif
            </div>
        </div>


    @empty
        <p>No hay noticias que mostrar</p>
    @endforelse


@endsection




