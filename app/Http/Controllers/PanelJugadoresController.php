<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Jugador;
class PanelJugadoresController extends Controller
{
    protected $jugadores;

    public function __construct(Jugador $jugador)
    {
        $this->jugadores = $jugador;
    }

    public function index (){
        $jugadores = $this->jugadores->all();
        return view('/panelJugador',compact('jugadores'));
    }

    public function index2 (){
        $jugadores = $this->jugadores->all();
        return view('/panelNewJugadores',compact('jugadores'));
    }

    public function newEquipo(Request $request){
        Jugador::create($request->all());
        return redirect()->back()->withErrors('Nuevo Jugador ingresado!');
    }

    public function editJugador($id)
    {
        $jugadores = Jugador::find($id);
        return view("/panelJugador",compact('jugadores'));
    }

    public function updateJugador($id, Request $request)
    {
        $jugador= Jugador::find($id);
        $nombre = $jugador->nombre;
        $jugador->update($request->all());
        return redirect()->back()->withErrors('Se modifico el equipo: '.$nombre);
    }

    public function destroyJugador($id)
    {
        $jugador = Jugador::find($id);
        $nombre = $jugador->nombre;
        $jugador->delete();
        return redirect()->back()->withErrors('Se eliminó el Jugador: '.$nombre);
    }
}
