<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User as Users;
use Livewire\WithPagination;

class UserLive extends Component
{
    //public $users;

    public function render()
    {
        // $this->users = Users::all();
        // return view('livewire.user-live', ['users'=>$this->users]);


        $users = Users::paginate(25);
        return view('livewire.user-live', ['users'=>$users]);
    }
}
