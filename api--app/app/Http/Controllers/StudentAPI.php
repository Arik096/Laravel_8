<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class StudentAPI extends Controller
{
    public function getSTD(){
        return DB::table('students')->get();
    }

    public function getSTDbyID($id = null)
    {
        return DB::table('students')->where('id', $id)->get();
    }

    public function setSTD(Request $request){
        $std = new Student;
        $std->name =$request->name;
        $std->dept =$request->dept;
        $std->email =$request->email;
        $std->phone =$request->phone;


        $result = $std->save();

        if($result){
            return "Data Added";
        }
        else{
            return "Error";
        }
    }
}
