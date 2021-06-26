<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userData(Request $request){
        $request->validate([
            'username'=>'required | max:10',
            'password'=>'required | min:4'
        ]);
        return $request;
    }
}
