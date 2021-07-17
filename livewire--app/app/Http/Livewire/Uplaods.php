<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Uplaod;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;


class Uplaods extends Component
{

    public $title, $filename;


    use WithFileUploads;
    public function fileUpload(){
        $validateData = $this->validate([
            'title' => 'required',
            'filename' => 'required'
        ]);
        $filename = $this->filename->store('files','public');
        $validateData['filename'] = $filename.Str::random(10);
        Uplaod::create($validateData);
        session()->flash('sms','uploaded');
        return redirect()->to(route('up'));
    }

    public function render()
    {
        return view('livewire.uplaods');
    }
}
