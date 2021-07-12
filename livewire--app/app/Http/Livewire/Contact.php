<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contact extends Component
{
    public $name, $email, $phone, $sms;

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:11',
            'sms' => 'required|min:10|max:50'
        ]);
    }

    public function submitCheck(){
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:11',
            'sms' => 'required|min:10|max:50'
        ]);
        dd($this->name, $this->email, $this->phone, $this->sms);
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
