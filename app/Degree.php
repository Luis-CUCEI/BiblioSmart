<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Degree extends Model
{
    use SoftDeletes;

    public function division(){
        return $this->belongsTo('App\Division');
    }

    public function books(){
        return $this->hasMany('App\Book');
    }

    protected $fillable = ['career', 'division_id',];
    protected $dates = ['deleted_at'];
}
