<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class StudentList extends Component
{
    public function render()
    {
        $students = DB::table('students')->get();

        return view('livewire.student-list', ['students'=>$students]);
    }
}
