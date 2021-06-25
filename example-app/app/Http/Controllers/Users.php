<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    public function index($name){
        return ['name'=> $name];
    }

    public function LoadView($name){
        return view('users', ['name'=> $name]);
    }
}
