<?php

namespace App\Http\Controllers;
//use Illuminate\Http\Request;
use App\Http\Requests;
//use App\Http\Controllers\Controller;
//use Illuminate\Support\Facades\Auth;
//use Symfony\Component\HttpKernel\Client;

class LoginController extends Controller
{
    public function index (){
        return view('auth/login');
}


}