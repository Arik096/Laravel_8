<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Emp;
use finfo;
use Illuminate\Support\Facades\DB;


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

    public function ed($id){
        $data =  Emp::find($id);
        return view('empEdit',['emp'=>$data]);
    }

    public function up(Request $request){
        $data = Emp::find($request->id);
        $data->name = $request->name;
        $data->age = $request->age;
        $data->address = $request->address;
        $data->save();
        return redirect('/emplist');
    }


    public function dbOperations(){
        // $data =  DB::table('emps')->get();
        // return view('dbop', ['emps'=>$data]);


        // return  DB::table('emps')
        // ->where('id', 10)
        // ->get();


        // return  (array)DB::table('emps')->find(10);


        // return  DB::table('emps')->count();


        // return DB::table('emps')
        // ->insert([
        //     'name'=>'arik last',
        //     'age'=> '24',
        //     'address'=>'sebanir'
        // ]);

        // return DB::table('emps')
        // ->where('id',10)
        // ->update([
        //     'col1'=>'5'
        // ]);

        // return DB::table('emps')
        // ->where('id',10)
        // ->delete();







        // aggerates


        // return DB::table('emps')->avg('id');
        // return DB::table('emps')->count('id');
        // return DB::table('emps')->sum('id');
        // return DB::table('emps')->max('id');
        // return DB::table('emps')->max('name');
        // return DB::table('emps')->min('name');

        $min_id = DB::table('emps')->min('id');
        $max_id = DB::table('emps')->max('id');

        return view('dbop',['maxed'=>$max_id, 'mined'=>$min_id]);
    }
}
