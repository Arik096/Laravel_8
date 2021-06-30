<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Emp;

class EmpController extends Controller
{
    public function show(){
        // return view('tableList');
        $data =  Emp::all();

        return view('tableList', ['emps'=>$data]);
    }
}
