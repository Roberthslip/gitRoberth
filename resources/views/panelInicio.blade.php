@extends("home");

@section('title','Panel');
@section('panel','active');

@section('content')
<nav class="navbar navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <span><a href="/" style="text-decoration:none" class="color3"> INCIO </a></span>
                <span><a href="jugadores" style="text-decoration:none" class="color3"> JUGADORES&ensp; &ensp;</a></span>
                <span><a href="estadisticas" style="text-decoration:none" class="color3"> EQUIPO&ensp; &ensp;</a></span>
                <span><a href="sedes" style="text-decoration:none" class="color3"> SEDE&ensp; &ensp;</a></span>
                <span><a href="panelInicio" style="text-decoration:none" class="color3"> PANEL COMNTROL&ensp; &ensp;</a></span></a></span>
                
            </nav>

          <div class="fondo4">
              
            
    <div class="row">
        <div class="col-lg-12" >
            <h1 style="color: blue; text-align: center; ">BIENVENIDO AL PANEL DE CONTROL : @if(isset(Auth::user()->name)) {{Auth::user()->name}}@endif</h1>
        </div>
    </div>

    <div class="row" style="margin-right: 100px; margin-left: 100px">

        <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">CLIENTE</th>
      <th scope="col">TORNEO</th>
      <th scope="col">EQUIPO</th>
      <th scope="col">SEDE</th>
      <th scope="col">JUGADOR</th>
      <th scope="col">GENERAR CALENDARIO</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td><a href={{ URL::to('/panel/verCliente') }}>Ver</a></td>
      <td><a href={{ URL::to('/panel/verTorneo') }}>Ver</a></td>
      <td><a href={{ URL::to('/panel/verEquipo') }}>Ver</a></td>
      <td><a href={{ URL::to('/panel/verSede') }}>Ver</a></td>
      <td><a href={{ URL::to('/panel/verJugador') }}>Ver</a></td>
      <td><a href={{ URL::to('/panel/calendario')}}>GENERAR</a></td>
    </tr>
    <tr>
      <td><a href={{ URL::to('/panel/newCliente') }}>Insertar</a></td>
      <td><a href={{ URL::to('/panel/newTorneo') }}>Insertar</a></td>
      <td><a href={{ URL::to('/panel/newEquipo') }}>Insertar</a></td>
       <td><a href={{ URL::to('/panel/newSede') }}>Insertar</a></td>
        <td><a href={{ URL::to('/panel/newJugador') }}>Insertar</a></td>
      
      
    </tr>
    
  </tbody>
</table>
        

    </div>

@endsection
</div>





