<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    public $connection = 'mysql2';
    public $table = 'links';
    use HasFactory;
}
