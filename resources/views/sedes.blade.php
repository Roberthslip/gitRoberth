@extends("home");

@section('title','Jugadores');
@section('sedes','active')

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

            <div class="fondo5">

    <h2 class="text-danger text-center" style="font-size: 40px;font-weight: bold">Sedes</h2>

    <?php $a = 1 ?>

    @forelse($sedes as $sede)
        @if($a == 6)
            <?php $a=1 ?>
        @endif
<div class="card border-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Informacion</div>
  <div class="card-body text-primary">
    <h5 class="card-title">Informacio De sede</h5>
    <p class="card-text">Sede: {{$sede->sede}}</p>
    <p class="card-text">Direccion: {{$sede->direccion}}</p>
  </div>
</div>



   

    @empty
        <h3 style="color: blue; text-align: center;">NO HAY SEDES CARGADAS</h3>
    @endforelse

@endsection

</div>




