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

            @if(!isset($torneo))

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Formato</th>
      <th scope="col">Inicia</th>
      <th scope="col">Termina</th>
      <th scope="col">ACTUALIZAR</th>
      <th scope="col">BORRAR</th>
      
    </tr>
  </thead>
   @forelse($torneos as $torneo)
  <tbody>
    <tr>

                             <td>{{$torneo->id}}</td>
                            <td>{{$torneo->nombre}}</td>
                            <td>{{$torneo->formato}}</td>
                            <td>{{$torneo->inicia}}</td>
                            <td>{{$torneo->termina}}</td>
                            <td><a href={{ URL::to('panel/'.$torneo->id.'/editTorneo') }}><button type="button" class="btn btn-light">Actualizar</button></a></td>
                            <td><a href={{ URL::to('panel/'.$torneo->id.'/destroyTorneo') }}><button type="button" class="btn btn-danger">Eliminar</button></a></td>
                            
      
    </tr>
  </tbody>

                             @empty
                        <tr class="text-center" id="celdas">
                            <td colspan="7">NO HAY DATOS CARGADOS</td>
                        </tr>
                    @endforelse
</table>

  @endif


                
                @if(isset($torneo))

                <form action="{!! route("panel.updateTorneo",$torneo->id) !!}" method="post" class="form-horizontal">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                    <h3 class="text-danger text-center" style="font-size: 40px">Id:{{ $torneo->id }}</h3><br>

                    <div class="form-group">
                        <label class="control-label col-lg-2">Nombre: </label>
                        <div class="col-lg-2">
                            <input type="text" class="form-control" value="{!! $torneo->nombre !!}" name="nombre" placeholder="Nombre">
                        </div>

                        <label class="control-label col-lg-2">Formato: </label>
                        <div class="col-lg-2">
                            <input type="text" class="form-control" value="{!! $torneo->formato !!}" name="formato" placeholder="Formato">
                        </div>

                        <label class="control-label col-lg-2">Inicia: </label>
                        <div class="col-lg-2">
                            <input type="text" class="form-control" value="{!! $torneo->inicia !!}" name="inicia" placeholder="Inicia">
                        </div>

                        <label class="control-label col-lg-2">Termina: </label>
                        <div class="col-lg-2">
                            <input type="text" class="form-control" value="{!! $torneo->termina !!}" name="termina" placeholder="Termina">
                        </div>

                        <button type="submit" class="btn btn-primary btn-block" style="margin-top:100px;">Actualizar</button>
                    </div>

                </form>

                @endif

        </div>





    </div>

@endsection





