<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    public function division(){
        return $this->belongsTo('App\Division');
    }
}
