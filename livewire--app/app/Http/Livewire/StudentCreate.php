<?php

namespace App\Http\Livewire;

use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Session\Session;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class StudentCreate extends Component
{
    public $name, $dept, $email, $phone;

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'dept' => 'required|max:5',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            //'password' => 'required|alpha_num|min:4'
        ]);
    }

    public function store(){
        $this->validate([
            'name' => 'required',
            'dept' => 'required|max:5',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            //'password' => 'required|alpha_num|min:4'
        ]);

        DB::table('students')
        ->insert([
            'name' => $this->name,
            'dept' => $this->dept,
            'email' => $this->email,
            'phone' => $this->phone,
            //'password' => $this->password
        ]);
        Session()->flash('sms', 'Student Added');
        return redirect()->to(route('stdlist'));
    }

    public function render()
    {
        return view('livewire.student-create');
    }
}
