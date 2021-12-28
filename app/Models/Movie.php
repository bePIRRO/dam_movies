<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function movie()
    {
        return $this->belongsTo('App\Models\Movie');
    }
}