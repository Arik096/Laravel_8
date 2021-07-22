<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class StudentAPI extends Controller
{
    public function getSTD()
    {
        return DB::table('students')->get();
    }

    public function getSTDbyID($id = null)
    {
        return DB::table('students')->where('id', $id)->get();
    }

    public function setSTD(Request $request)
    {
        $result = DB::table('students')
            ->insert([
                'name' => $request->name,
                'dept' => $request->dept,
                'email' => $request->email,
                'phone' => $request->phone
            ]);

        if ($result) {
            return "Data Added";
        } else {
            return "Error";
        }
    }

    public function upSTD(Request $request)
    {
        $result = DB::table('students')
            ->where('id', $request->id)
            ->update([
                'name' => $request->name
            ]);

        if ($result == 1) {
            return "Data Update Done";
        } else {
            return "Error";
        }
    }

    public function deSTD($id){
        $result = DB::table('students')
        ->where('id',$id)
        ->delete();

        if ($result == 1) {
            return "Data Deleted";
        } else {
            return "Error";
        }
    }
}
