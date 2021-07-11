<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Action extends Component
{
    public $sum = 0;
    public $sms;
    public $live_sms;
    public $sum_of_two = 0;
    public $get_sum = 0, $n1 = 0, $n2 = 0;



    public function takeAction(){
        $this->sum = $this->sum + 1;
    }
    public function makeSum($num_1, $num_2){
        $this->sum_of_two = $num_1 + $num_2;
    }

    public function displaySMS(){
        $this->sms = $this->live_sms;
    }

    public function getSum(){
        $this->get_sum = $this->n1 + $this->n2;
    }


    public function render(){
        return view('livewire.action');
    }
}
