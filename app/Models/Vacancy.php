<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'image',
        'city',
        'field',
        'qualification',
        'work_graphic',
        'experience',
        'education',
        'salary',
        'about',
        'requirement',
        'note',
    ];
    
}
