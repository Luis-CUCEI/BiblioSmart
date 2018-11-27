<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function division() {
        return $this->belongsTo('App\Division');
    }

    public function degree() {
        return $this->belongsTo('App\Degree');
    }

    protected $fillable = ['tittle', 'n_system', 'isbn', 'pages', 'author', 'theme', 'copies',
        'bar_code', 'classification', 'division_id', 'degree_id'];
}
