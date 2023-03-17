<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enrolledsubjects extends Model
{
    use HasFactory;
    protected $table = 'enrolledsubjects';

    protected $fillable = [
        
        'subjectCode',
        'description',
        'units',
        'schedule',
    ];
}
