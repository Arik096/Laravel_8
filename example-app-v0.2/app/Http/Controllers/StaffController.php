<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaffController extends Controller
{
    public function index(){
        // return DB::table('staffs')->get();


        // return DB::table('staffs')
        // ->join('companys', 'staffs.id', "=", 'companys.staff_id')
        // ->get();

        // return DB::table('staffs')
        // ->join('companys', 'staffs.id', "=", 'companys.staff_id')
        // ->select('staffs.*')
        // ->get();

        // return DB::table('staffs')
        // ->join('companys', 'staffs.id', "=", 'companys.staff_id')
        // ->select('staffs.*')
        // ->where('staffs.name','arik')
        // ->get();


        //return DB::table('staffs')
        //->rightjoin('companys', 'staffs.id', "=", 'companys.staff_id')
        // ->select('staffs.*')
        //->where('staffs.name', 'arik')
        //->get();

        return DB::table('staffs')
        ->leftjoin('companys', 'staffs.id', "=", 'companys.staff_id')
        // ->select('staffs.*')
        //->where('staffs.name', 'arik')
        ->get();
    }
}
