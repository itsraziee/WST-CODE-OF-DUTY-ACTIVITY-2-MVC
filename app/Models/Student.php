<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'lrn',
        'firstname',
        'middlename',
        'lastname',
        'age',
        'year_level',
        'section'
    ];
}
