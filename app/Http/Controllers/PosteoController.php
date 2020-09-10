<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Client;
use App\Posteo;

class PosteoController extends Controller
{
    protected $posteos;

    public function __construct(Posteo $posteo)
    {
        $this->posteos = $posteo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posteos = $this->posteos->all();

        return view('/inicio',compact('posteos'));
    }

}