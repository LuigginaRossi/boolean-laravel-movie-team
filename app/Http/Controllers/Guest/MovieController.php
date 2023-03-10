<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
class MovieController extends Controller
{
    function index(){
        $movies = Movie::latest()->take(10)->orderBy('release_year', 'desc')->get();
        // dd($movies);
        return view("layouts.app", compact("movies"));
    }
}

