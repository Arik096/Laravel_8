<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Staff;
use App\Models\Company;
use App\Models\Device;

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


    public function accessors(){
        return Staff::all();
    }

    public function mutators()
    {
       $data = new Staff;

       $data->name = 'mr. jony sins';
       $data->email = 'USA';
       $data->save();

       return $data;
    }

    public function one2oneRelation(){
        return Staff::find(13)->getCompany;
    }

    public function one2manyRelation()
    {
        // return Staff::find(4)->getDevice;
        return Staff::find(1)->getDevice;
    }
}
