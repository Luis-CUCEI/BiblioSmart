<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    public function degrees(){
        return $this->hasMany('App\Degree');
    }

    public function books(){
        return $this->hasMany('App\Book');
    }

    protected $fillable = ['name',];
}
