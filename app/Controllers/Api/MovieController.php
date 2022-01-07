<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;

class MovieController extends BaseController
{
    public function index()
    {
        $movie = new Movie();
        $data['movies'] = $movie->findAll()->paginate(5);
        
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
