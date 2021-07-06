<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function userList(){
        $userData = User::get();
        return view('user.userlist',['users'=>$userData]);
    }
}
