<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Client;
use App\Cliente;


class ClienteController extends Controller
{
    protected $clientes;

    public function __construct(Cliente $cliente)
    {
        $this->clientes = $cliente;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = $this->clientes->all();

        return view('/perfil',compact('clientes'));
    }
}
