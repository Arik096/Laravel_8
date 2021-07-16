<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class StudentUpdate extends Component
{
    public $stdID, $stdInfo, $name, $email, $phone, $dept;
    public function mount($id){
        $this->stdID = $id;
        $this->stdInfo = DB::table('students')->where('id', $this->stdID)->get();
        $this->name = $this->stdInfo[0]->name;
        $this->email = $this->stdInfo[0]->email;
        $this->dept = $this->stdInfo[0]->dept;
        $this->phone = $this->stdInfo[0]->phone;
    }


    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'dept' => 'required|max:5',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            //'password' => 'required|alpha_num|min:4'
        ]);
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'dept' => 'required|max:5',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            //'password' => 'required|alpha_num|min:4'
        ]);

        DB::table('students')->where('id', $this->stdID)
        ->update([
            'name' => $this->name,
            'dept' => $this->dept,
            'email' => $this->email,
            'phone' => $this->phone,
            //'password' => $this->password
        ]);
        Session()->flash('sms', 'Student Updated');
        return redirect()->to(route('stdlist'));
    }

    public function render()
    {
        return view('livewire.student-update');
    }
}
