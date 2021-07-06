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

    function userCreate(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect('/userlist')->with('create', 'Data Cretaed');
    }

    function userUpdate($id){
        $singleUserData = DB::table('users')->where('id',$id)->get();
        return view('user.userupdate',['user'=> $singleUserData]);
    }

    function saveUserData(Request $request){
        $request->validate([
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

     function userDelete(Request $request){
        DB::table('users')->where('id',$request->id)->delete();
        return redirect('/userlist')->with('delete', 'Data Deleted');
     }
}
