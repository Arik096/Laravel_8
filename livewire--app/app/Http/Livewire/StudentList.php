<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Session\Session;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Livewire\WithPagination;

class StudentList extends Component
{

    public function delete($id){
        DB::table('students')->where('id', $id)->delete();
        Session()->flash('sms', 'Student Deleted');
        return Redirect()->to(route('stdlist'));
    }


    public function render()
    {
        $students = DB::table('students')->paginate(10);

        return view('livewire.student-list', ['students'=>$students]);
    }
}
