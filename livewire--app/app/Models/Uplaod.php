<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uplaod extends Model
{
        use HasFactory;

    protected $table = "uplaods";
    protected $fillable = ['title','filename'];
}
