<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class PanelClienteController extends Controller
{

    protected $clientes;

    public function __construct(Cliente $cliente)
    {
        $this->clientes = $cliente;
    }

    public function index (){
        $clientes = $this->clientes->all();
        return view('/panelCliente',compact('clientes'));
    }

    public function index2 (){
        $clientes = $this->clientes->all();
        return view('/panelNewCliente',compact('clientes'));
    }

    public function newCliente(Request $request){
        Cliente::create($request->all());
        return redirect()->back()->withErrors('Nuevo cliente ingresado!');
    }

    public function editCliente($id)
    {
        $cliente = Cliente::find($id);
        return view("/panelCliente",compact('cliente'));
    }

    public function updateCliente($id, Request $request)
    {
        $cliente = Cliente::find($id);
        $nombre = $cliente->nombre;
        $apellido = $cliente->apellido;
        $cliente->update($request->all());
        return redirect()->back()->withErrors('Se modifico el cliente: '.$nombre.' '.$apellido);
    }

    public function destroyCliente($id)
    {
        $cliente = Cliente::find($id);
        $nombre = $cliente->nombre;
        $apellido = $cliente->apellido;
        $cliente->delete();
        return redirect()->back()->withErrors('Se eliminó el cliente: '.$nombre.' '.$apellido);
    }

}