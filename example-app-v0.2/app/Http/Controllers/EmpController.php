<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Emp;


class EmpController extends Controller
{
    public function show(){
        // return view('tableList');
        $data =  Emp::paginate(10);
        return view('tableList', ['emps'=>$data]);
    }


    public function addData(Request $request){
        $emp = new Emp;
        $emp->name = $request->name;
        $emp->age = $request->age;
        $emp->address = $request->address;
        $emp->col1 = $request->col1;
        $emp->col2 = $request->col2;
        $emp->col3 = $request->col3;
        $emp->col4 = $request->col4;
        $emp->col5 = $request->col5;
        $emp->col6 = $request->col6;
        $emp->save();
        return redirect('/emplist');
    }

    public function del($id){
        $data = Emp::find($id);
        $data->delete();
        return redirect('/emplist')->with('status','Record Deleted');
    }
}
