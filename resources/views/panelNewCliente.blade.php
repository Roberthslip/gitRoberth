@extends("home");

@section('title','Panel');
@section('panel','active');

@section('content')
<nav class="navbar navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <span><a href="/../" style="text-decoration:none" class="color3"> INCIO </a></span>
                <span><a href="/../jugadores" style="text-decoration:none" class="color3"> JUGADORES&ensp; &ensp;</a></span>
                <span><a href="/../estadisticas" style="text-decoration:none" class="color3"> EQUIPO&ensp; &ensp;</a></span>
                <span><a href="/../sedes" style="text-decoration:none" class="color3"> SEDE&ensp; &ensp;</a></span>
                <span><a href="/../panelInicio" style="text-decoration:none" class="color3"> PANEL COMNTROL&ensp; &ensp;</a></span></a></span>
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    
                </div>
            </nav>
            
    <div class="row">
        <div class="col-lg-12" >
            <h1 style="color: blue; text-align: center; ">BIENVENIDO AL PANEL DE CONTROL : @if(isset(Auth::user()->name)) {{Auth::user()->name}}@endif</h1>
        </div>
    </div>

    <div class="row" style="margin-top: 20px; margin-left: 20px; margin-right: 20px">

        
        <div class="col-lg-3">
            <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                <div class="panel-heading">Cliente</div>
                <div class="panel-body"><a href={{ URL::to('/panel/verCliente') }}>Ver</a></div>
                <div class="panel-body"><a href={{ URL::to('/panel/newCliente') }}>Insertar</a></div>
            </div>
            <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                <div class="panel-heading">Torneo</div>
                <div class="panel-body"><a href={{ URL::to('/panel/verTorneo') }}>Ver</a></div>
                <div class="panel-body"><a href={{ URL::to('/panel/newTorneo') }}>Insertar</a></div>
            </div>
            <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                <div class="panel-heading">Equipo</div>
                <div class="panel-body"><a href={{ URL::to('/panel/verEquipo') }}>Ver</a></div>
                <div class="panel-body"><a href={{ URL::to('/panel/newEquipo') }}>Insertar</a></div>
            </div>
            <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                <div class="panel-heading">Sede</div>
                <div class="panel-body"><a href={{ URL::to('/panel/verSede') }}>Ver</a></div>
                <div class="panel-body"><a href={{ URL::to('/panel/newSede') }}>Insertar</a></div>
            </div>

            <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                <div class="panel-heading">Jugadores</div>
                <div class="panel-body"><a href={{ URL::to('/panel/verJugador') }}>Ver</a></div>
                <div class="panel-body"><a href={{ URL::to('/panel/newJugador') }}>Insertar</a></div>
            </div>
        </div>

        <div class="col-lg-9">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

                    <form action="{!! route("panel.newCliente") !!}" method="post">


                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                        <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                        <input type="text" class="form-control" placeholder="Apellido" name="apellido">
                        <input type="number" class="form-control" placeholder="Edad" name="edad" min="15" max="45">
                        <input type="number" class="form-control" placeholder="Id Usuario" name="id_users" min="0">
                        <div class="checkbox"><label><input type="checkbox" class="checkbox" name="permiso" value="1">Permiso: </label></div>
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Insertar</button>

                    </form>

        </div>

    </div>

@endsection





