<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Torneo;



class PanelTorneoController extends Controller
{

    protected $torneos;

    public function __construct(Torneo $torneo)
    {
        $this->torneos = $torneo;
    }

    public function index (){
        $torneos = $this->torneos->all();
        return view('/panelTorneo',compact('torneos'));
    }

    public function index2 (){
        $torneos = $this->torneos->all();
        return view('/panelNewTorneo',compact('torneos'));
    }

    public function newTorneo(Request $request){
        Torneo::create($request->all());
        return redirect()->back()->withErrors('Nuevo torneo ingresado!');
    }

    public function editTorneo($id)
    {
        $torneo = Torneo::find($id);
        return view("/panelTorneo",compact('torneo'));
    }

    public function updateTorneo($id, Request $request)
    {
        $torneo = Torneo::find($id);
        $nombre = $torneo->nombre;
        $torneo->update($request->all());
        return redirect()->back()->withErrors('Se modifico el torneo: '.$nombre.' ');
    }

    public function destroyTorneo($id)
    {
        $torneo = Torneo::find($id);
        $nombre = $torneo->nombre;
        $torneo->delete();
        return redirect()->back()->withErrors('Se eliminó el torneo: '.$nombre);
    }

}