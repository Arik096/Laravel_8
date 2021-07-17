<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Session\Session;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Livewire\WithPagination;

class StudentList extends Component
{

    public $sBox;

    public function delete($id){
        DB::table('students')->where('id', $id)->delete();
        Session()->flash('sms', 'Student Deleted');
        return Redirect()->to(route('stdlist'));
    }


    public function render()
    {
        $students = DB::table('students')
        ->where('name', 'LIKE', '%'.$this->sBox.'%')
        ->orWhere('email', 'LIKE', '%'.$this->sBox.'%')
        ->orWhere('dept', 'LIKE', '%'.$this->sBox.'%')
        ->orWhere('phone', 'LIKE', '%'.$this->sBox.'%')
        ->paginate(10);

        return view('livewire.student-list', ['students'=>$students]);
    }
}
