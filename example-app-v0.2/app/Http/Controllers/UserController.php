<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    // public function index(){
    //      return DB::select("select * from users");
    // }


    public function getData(){
        return User::all();
    }
}
