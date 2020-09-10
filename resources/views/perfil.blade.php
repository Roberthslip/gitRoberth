@extends("home");

@section('title','Perfil');
@section('perfil','active')

@section("content")
<nav class="navbar navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <span><a href="/" style="text-decoration:none" class="color3"> INCIO </a></span>
                <span><a href="jugadores" style="text-decoration:none" class="color3"> JUGADORES&ensp; &ensp;</a></span>
                <span><a href="estadisticas" style="text-decoration:none" class="color3"> EQUIPO&ensp; &ensp;</a></span>
                <span><a href="sedes" style="text-decoration:none" class="color3"> SEDE&ensp; &ensp;</a></span>
                <span><a href="panelInicio" style="text-decoration:none" class="color3"> PANEL COMNTROL&ensp; &ensp;</a></span></a></span>
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    
                </div>
            </nav>

    <h2 class="text-danger text-center" style="font-size: 40px;font-weight: bold">Perfil</h2>

    <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4 text-info" style="font-size: 20px; border: solid 5px black;background: white">
        <p>Usuario: {{Auth::user()->name}}</p>
        <p>Email: {{Auth::user()->email}}</p>
        <p>Nombre: {{$clientes[Auth::user()->id]->nombre}}</p>
        <p>Apellido: {{$clientes[Auth::user()->id]->apellido}}</p>
        <p>Edad: {{$clientes[Auth::user()->id]->edad}}</p>
    </div>

@endsection






