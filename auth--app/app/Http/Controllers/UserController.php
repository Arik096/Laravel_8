<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function userList(){
        $userData = DB::table('users')->get();
        return view('user.userlist',['users'=>$userData]);
    }

    function userUpdate($id){
        $singleUserData = DB::table('users')->where('id',1)->get();
        //$singleUserData = $Data->toJson();
        return view('user.userupdate',['user'=> $singleUserData]);
    }

    function saveUserData(Request $request){
        $dataOk = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password' => 'required'
        ]);

        DB::table('users')->where('id',$request->id)->update([
            'name'=> $request->name,
            'email'=>$request->email,
            'password'=>$request->password
        ]);

        return redirect('/userlist')->with('update','Data Updated');
    }
}
