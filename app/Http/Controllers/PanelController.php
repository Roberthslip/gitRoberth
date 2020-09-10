<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class PanelController extends Controller
{

    public function index (){
        return view('/panelInicio');
    }



}