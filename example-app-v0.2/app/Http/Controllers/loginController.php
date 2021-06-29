<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index(Request $request){
        $data = $request->input();
        $request->session()->put('username', $data['username']);

        return redirect('/profile');
    }
}
