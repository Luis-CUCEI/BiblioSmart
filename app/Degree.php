<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    public function division(){
        return $this->belongsTo('App\Division');
    }

    public function books(){
        return $this->hasMany('App\Book');
    }

    protected $fillable = ['career', 'division_id',];
}
