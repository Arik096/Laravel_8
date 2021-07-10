<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Home extends Component
{
    public function render($name = null)
    {
        return view('livewire.home',['name'=>$name]);
    }
}
