<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Product extends Component
{
    public $title, $name, $info = [];




    public function mount(){
        $this->info[] = "this application is mounting.............";
    }

    public function hydrate(){
        $this->info[] = "this application is hydrating.............";
    }


    public function updating($name, $value){
        $this->info[] = "this application is upadting.............";
    }


    public function updated($name, $value){
        $this->info[] = "this application is upadted.............";
    }


    public function updatingName(){
        $this->info[] = "this application is upadting name.............";
    }


    public function updatedName(){
        $this->info[] = "this application is upadted name.............";
    }

    public function render(){
        return view('livewire.product');
    }
}
