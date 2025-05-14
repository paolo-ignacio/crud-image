<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    //


    protected $fillable = [
        'fname',
        'lname',
        'email',
        'password',
        'image',
        'birthdate'
    ];
}
