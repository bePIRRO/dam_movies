<?php

namespace App\Models;

use CodeIgniter\Model;

class Movie extends Model
{
    /*use SoftDeleletes;
    protected $fillable = ['title', 'description', 'genre'];
    public function movie()
    {
        return $this->belongsTo('App\Models\Movie');
    }*/

    protected $table = 'movies';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'title',
        'description',
        'genre'
    ];
}