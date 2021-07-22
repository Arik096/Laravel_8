<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DummyAPI extends Controller
{
    public function getData()
    {
        return [
            'name' => 'arik',
            'email' => 'arikbncc',
            'city' => 'dhaka'
        ];
    }
}
