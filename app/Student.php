<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['fisrtname', 'lastname', 'password', 'email', 'alumnocode', 'phonenumber', 'gender', 'confirmedaccount'];
}
