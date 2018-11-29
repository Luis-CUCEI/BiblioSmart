<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function books()
    {
        return $this->belongsToMany('App\Book', 'student_book')->withPivot('school_cycle', 'delivery_at', 'delivery', 'created_at');
    }

    protected $fillable = ['fisrtname', 'lastname', 'password', 'email', 'alumnocode', 'phonenumber', 'gender', 'confirmedaccount', 'book_id'];
}
