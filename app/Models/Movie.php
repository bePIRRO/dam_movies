<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use SoftDeleletes;
    protected $fillable = ['title', 'description', 'genre'];
    public function movie()
    {
        return $this->belongsTo('App\Models\Movie');
    }
}