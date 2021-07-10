<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Form extends Component
{
    public $name;
    public $sms;
    public $marriage;
    public $color=[];
    public $friuts;

    public function render()
    {
        return view('livewire.form');
    }
}
