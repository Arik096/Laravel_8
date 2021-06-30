<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index(Request $request){
        $filename = $request->file('file')->getClientOriginalName();
        return $request->file('file')->storeAs('docs', $filename);
    }
}
