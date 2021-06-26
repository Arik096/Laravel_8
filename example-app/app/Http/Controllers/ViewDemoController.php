<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewDemoController extends Controller
{
    public function LoadView()
    {
        $data = ['arik','omar', 'hasib'];
        return view('demoView',['names'=>$data]);
    }
}
