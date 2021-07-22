<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentAPI extends Controller
{
    public function getSTD(){
        return DB::table('students')->get();
    }

    public function getSTDbyID($id = null)
    {
        return DB::table('students')->where('id', $id)->get();
    }
}
