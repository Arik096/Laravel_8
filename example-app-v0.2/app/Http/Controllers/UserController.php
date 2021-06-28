<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Http;


class UserController extends Controller
{
    // public function index(){
    //      return DB::select("select * from users");
    // }


    // public function getData(){
    //     return User::all();
    // }


    // public function apiData(){
    //     $information =  Http::get('https://reqres.in/api/users');
    //     // $result = json_decode($data, true);

    //     //$headInfo = $information->headers();

    //     return view('apiData',['information'=>$information['data']]);
    // }


    public function testRequest(Request $request){
        return $request;
    }
}
