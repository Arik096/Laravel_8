<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    public function sendEmail(){
        $details = [
            'title' =>'Test Mail',
            'body' =>"Test Mail"
        ];
        Mail::to('arikbncc@gmail.com')->send(new TestMail($details));
        return 'email send';
    }
}
