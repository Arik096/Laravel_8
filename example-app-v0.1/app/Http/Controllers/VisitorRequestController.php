<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorRequestController extends Controller
{
    public function visitorData(Request $request){
        $request->validate([
            'name'=> 'min:5 | required'
        ]);
        return $request;
    }
}
