@extends("home");

@section('title','Equipos');
@section('estadisticas','active');

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
                
            </nav>

            <div class="fondo2">
                
            

    <h2 class="text-danger text-left" style="font-size: 40px;font-weight: bold">Contacto  </h2>


    <div class="panel panel-info filterable">
        <div class="panel-heading">
            <h3 class="panel-title">Equipos y Estadisticas</h3>
        </div>
        <table class="table">
            <thead>
            <tr class="filters">

                <th><input type="text" class="form-control" placeholder="Equipo" ></th>
                <th><input type="text" class="form-control" placeholder="Barrio" ></th>
                <th><input type="text" class="form-control" placeholder="Sede" ></th>
                <th><input type="text" class="form-control" placeholder="Direccion" ></th>
            </tr>
            </thead>

            @forelse($equipos as $equipo)

                <tbody>

                <tr>
                    <td>{{$equipo->nombre}}</td>
                    <td>{{$equipo->barrio}}</td>
                    <td>{{$equipo->sede->sede}}</td>
                    <td>{{$equipo->sede->direccion}}</td>
                </tr>

                </tbody>



            @empty
                <tr class="text-center" id="celdas">

                    <td colspan="7">NO HAY EQUIPOS CARGADOS</td>
                </tr>
            @endforelse

        </table>
    </div>
    </div>

@endsection






