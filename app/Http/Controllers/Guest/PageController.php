<?php

namespace App\Http\Controllers\Guest;

use App\Models\Movie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function fetch() {
        $movies = Movie::all();
        return view('homepage', [
            'movies' => $movies
        ]);
    }
}
