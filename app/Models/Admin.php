<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;
    use HasFactory;

    protected $guard = 'admin';

    // The attributes that are mass assignable.
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // The attributes that should be hidden for arrays (like password).
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // The attributes that should be cast to native types.
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

}
