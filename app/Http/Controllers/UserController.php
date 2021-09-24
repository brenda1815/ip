<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //creamos nuestro primer metodo
    public function index(){
        return view('primera');
    }
    public function history(){
        return view('historia');
    }
    public function tipos(){
        return view('tipos');
    }
    public function p_infantil(){
        return view('p_infantil');
    }
}
