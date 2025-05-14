<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
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
