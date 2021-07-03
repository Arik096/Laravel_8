<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Link;



class DB2Controller extends Controller
{
    //
    public function index(){
        // return DB::connection('mysql2')->table('links')->get();


        return Link::all();

    }
}
