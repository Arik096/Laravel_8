<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    public $table = 'staffs';
    use HasFactory;



    public function getNameAttribute($value){
        return ucfirst($value);
    }

    public function getEmailAttribute($value){
        return $value.' ,bd';
    }
}
