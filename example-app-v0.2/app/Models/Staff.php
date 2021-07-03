<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    public $table = 'staffs';
    use HasFactory;



    // public function getNameAttribute($value){
    //     return ucfirst($value);
    // }

    // public function getEmailAttribute($value){
    //     return $value.' ,bd';
    // }


    // public function setNameAttribute($value){
    //     if(substr($value, 0 ,3) == 'Mr.' || substr($value, 0, 3) == 'mr.'){
    //         $this->attributes['name'] = $value;
    //     }
    //     else{
    //     $this->attributes['name'] = 'Mr. '. $value;
    //     }
    // }
    // public function setEmailAttribute($value){
    //     $this->attributes['email'] = $value. ', bd';
    // }

    public function getCompany(){
        return $this->hasOne('App\Models\Company');
    }
}
