<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Client;
use App\Equipo;

class EquipoController extends Controller
{
    protected $equipos;

    public function __construct(Equipo $equipo)
    {
        $this->equipos = $equipo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipos = $this->equipos->all();

        return view('estadisticas',compact('equipos'));
    }
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //create
    {
        $equipo = Equipo::create ($request->all());
        return  redirect()->route('equipos.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipo = Equipo::find($id);
        return view ('equipos.index', ['equipos' => $equipo]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) // edit
    {
        $equipo = Equipo::find($id);
        $equipo = Equipo::create($request->all());
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equipo = Equipo::where($id);
        $equipo->delete();
    }
}