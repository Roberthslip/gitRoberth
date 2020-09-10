<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Client;
use App\Jugador;

class JugadorController extends Controller
{
    protected $jugadores;

    public function __construct(Jugador $jugador)
    {
        $this->jugadores = $jugador;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jugadores = $this->jugadores->all();

        return view('/jugadores',compact('jugadores'));
    }

}