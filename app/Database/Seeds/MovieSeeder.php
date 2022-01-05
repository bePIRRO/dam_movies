<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MovieSeeder extends Seeder
{
    public function run()
    {        
        $url = 'https://api.themoviedb.org/3/discover/movie/?api_key=f696298dbe386fee32974e49047db33d&language=it-IT';

	    $movies = json_decode(file_get_contents($url), true);
        
        for ($i = 0; $i < count($movies['results']); $i++) {
            $movie = json_decode(file_get_contents('https://api.themoviedb.org/3/movie/' . $movies['results'][$i]['id'] .'?api_key=f696298dbe386fee32974e49047db33d&language=it-IT'), true);

            $genres = [];
	
	        for ($n = 0; $n < count($movie['genres']); $n++) {
		        array_push($genres, $movie['genres'][$n]['name']);
	        }

            $genres = implode(', ', $genres);

            $data = [
                'title' => $movie['title'],
                'description' => $movie['overview'],
                'genre' => $genres,
            ];
            $this->db->table('movies')->insert($data);
        }
        
    }
}
