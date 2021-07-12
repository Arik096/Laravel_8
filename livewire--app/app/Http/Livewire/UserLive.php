<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User as Users;

class UserLive extends Component
{
    public $users;

    public function render()
    {
        $this->users = Users::all();
        return view('livewire.user-live', ['user'=>$this->users]);
    }
}
