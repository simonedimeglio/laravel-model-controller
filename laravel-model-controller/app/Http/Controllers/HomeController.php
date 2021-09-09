<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
class HomeController extends Controller
{
    public function index() {

        // SELECT * FROM movies 
        // Grazie a ORM possiamo evitare di scrivere le query 
        $allMovies = Movie::all();
        
        /* DEBUGGING DUMPS
        dump($allMovies);
        dump($allMovies[0]->title); // per selezionare la singola proprietà
        */

        // Passo dati alla home
        return view('home', compact('allMovies'));

    }

}

