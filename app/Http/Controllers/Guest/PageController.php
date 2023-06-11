<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Movie;

class PageController extends Controller
{
    public function index(){
        $title = 'Pagina Home';
    
        $movies = Movie::all();
    
        return view('pages.movies', compact( 'title', 'movies' ) );
    }
}
