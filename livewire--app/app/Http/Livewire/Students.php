<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;

use Livewire\Component;

class Students extends Component
{
    public $name, $dept, $email, $phone;


    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'dept' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:11'
        ]);
    }

    public function resetInputFields(){
        $this->name = '';
        $this->dept = '';
        $this->email = '';
        $this->phone = '';
    }

    public function store(){
        $cleanData = $this->validate([
            'name' => 'required',
            'dept' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:11'
        ]);
        DB::table('students')->insert([
            'name' => $this->name,
            'dept' => $this->dept,
            'email' => $this->email,
            'phone' => $this->phone
        ]);
        session()->flash('sms','Added Done');
        $this->resetInputFields();
        $this->emit('studentAdded');
    }


    public function render()
    {
        $students = DB::table('students')
        ->orderBy('id', 'ASC')
        ->get();

        return view('livewire.students',['students'=>$students]);
    }
}
