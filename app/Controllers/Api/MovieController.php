<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;

class MovieController extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect('db_dam_movies');
        $movies = Movie::orderBy('id', 'title')->paginate(5);
        
        return rensponse()->json($movies);
    }

    public function show(Movie $movie)
    {
        return renspons()->json($movie);
    }

    public function destroy($id)
    {
        Movie::destroy($id);

        return rensponse()->json("", 204);
    }
}
