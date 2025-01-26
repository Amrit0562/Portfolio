<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = 'experiences';
    protected $fillable = [
        'position',
        'company',
        'experience_time',
        'join',
        'leave',
    ];
}
