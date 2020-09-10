<?php

namespace App\Http\Controllers;

use App\Sede;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class PanelSedeController extends Controller
{

    protected $sedes;

    public function __construct(Sede $sede)
    {
        $this->sedes = $sede;
    }

    public function index (){
        $sedes = $this->sedes->all();
        return view('/panelSede',compact('sedes'));
    }

    public function index2 (){
        $sedes = $this->sedes->all();
        return view('/panelNewSede',compact('sedes'));
    }

    public function newSede(Request $request){
        Sede::create($request->all());
        return redirect()->back()->withErrors('Nueva sede ingresada!');
    }

    public function editSede($id)
    {
        $sede = Sede::find($id);
        return view("/panelSede",compact('sede'));
    }

    public function updateSede($id, Request $request)
    {
        $sede = Sede::find($id);
        $nombre = $sede->sede;
        $sede->update($request->all());
        return redirect()->back()->withErrors('Se modifico la sede: '.$nombre.' ');
    }

    public function destroySede($id)
    {
        $sede = Sede::find($id);
        $nombre = $sede->sede;
        $sede->delete();
        return redirect()->back()->withErrors('Se eliminó la sede: '.$nombre);
    }

}