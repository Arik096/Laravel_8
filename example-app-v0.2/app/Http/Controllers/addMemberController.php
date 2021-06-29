<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addMemberController extends Controller
{
    public function addMember(Request $request){
        $data = $request->input();
        $request->session()->flash('user',$data['user']);
        return redirect('/member');
    }
}
