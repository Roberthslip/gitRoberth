<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Equipo;



class PanelEquipoController extends Controller
{

    protected $equipos;

    public function __construct(Equipo $equipo)
    {
        $this->equipos = $equipo;
    }

    public function index (){
        $equipos = $this->equipos->all();
        return view('/panelEquipo',compact('equipos'));
    }

    public function index2 (){
        $equipos = $this->equipos->all();
        return view('/panelNewEquipo',compact('equipos'));
    }

    public function newEquipo(Request $request){
        Equipo::create($request->all());
        return redirect()->back()->withErrors('Nuevo equipo ingresado!');
    }

    public function editEquipo($id)
    {
        $equipos = Equipo::find($id);
        return view("/panelEquipo",compact('equipos'));
    }

    public function updateEquipo($id, Request $request)
    {
        $equipo = Equipo::find($id);
        $nombre = $equipo->nombre;
        $equipo->update($request->all());
        return redirect()->back()->withErrors('Se modifico el equipo: '.$nombre);
    }

    public function destroyEquipo($id)
    {
        $equipo = Equipo::find($id);
        $nombre = $equipo->nombre;
        $equipo->delete();
        return redirect()->back()->withErrors('Se eliminó el torneo: '.$nombre);
    }

}