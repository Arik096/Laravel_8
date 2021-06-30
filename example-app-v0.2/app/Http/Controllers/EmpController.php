<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Emp;


class EmpController extends Controller
{
    public function show(){
        // return view('tableList');
        $data =  Emp::paginate(7);
        return view('tableList', ['emps'=>$data]);
    }
}
