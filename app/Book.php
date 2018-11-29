<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function division()
    {
        return $this->belongsTo('App\Division');
    }

    public function degree()
    {
        return $this->belongsTo('App\Degree');
    }

    public function students()
    {
        return $this->belongsToMany('App\Student', 'student_book')->withPivot('school_cycle', 'delivery_at', 'delivery', 'created_at');
    }

    protected $fillable = ['tittle', 'n_system', 'isbn', 'pages', 'author', 'theme', 'copies',
        'bar_code', 'classification', 'division_id', 'degree_id'];
}
