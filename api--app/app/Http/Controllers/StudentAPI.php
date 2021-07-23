<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use Illuminate\Support\Facades\Validator;

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

        $validator  = Validator::make($request->all(), [
            'name' => 'required | min:5',
            'dept' => 'required | max:5',
            'email' => 'required | email',
            'phone' => 'required | numeric'
        ]);


        if ($validator->fails()) {
            return $validator->errors();
        } else {
            $result = DB::table('students')
                ->insert([
                    'name' => $request->name,
                    'dept' => $request->dept,
                    'email' => $request->email,
                    'phone' => $request->phone
                ]);
        }


        if ($result) {
            return "Data Added";
        } else {
            return "Error";
        }
    }

    public function upSTD(Request $request)
    {
        $validator  = Validator::make($request->all(), [
            'name' => 'required | min:5',
            'dept' => 'required | max:5',
            'email' => 'required | email',
            'phone' => 'required | numeric'
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        } else {
            $result = DB::table('students')
                ->where('id', $request->id)
                ->update([
                    'name' => $request->name,
                    'dept' => $request->dept,
                    'email' => $request->email,
                    'phone' => $request->phone
                ]);
        }

        if ($result == 1) {
            return "Data Update Done";
        } else {
            return "Error";
        }
    }

    public function deSTD($id)
    {
        $result = DB::table('students')
            ->where('id', $id)
            ->delete();

        if ($result == 1) {
            return "Data Deleted";
        } else {
            return "Error";
        }
    }


    public function seSTD($term)
    {
        $gotData =  DB::table('students')
            ->where('name', 'Like', '%' . $term . '%')
            ->orWhere('dept', 'Like', '%' . $term . '%')
            ->orWhere('phone', 'Like', '%' . $term . '%')
            ->orWhere('email', 'Like', '%' . $term . '%')
            ->get();


        if ($gotData == null) {
            return $gotData;
        } else {
            return ['result' => 'No Data Found'];
        }
    }
}
