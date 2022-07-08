<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function homepage(){

        $movies = Movie::all();
        // return view('welcome',[
        //     'films'=>$movies
        // ]);

        // return $movies;

        return view('welcome',compact('movies'));
    }
    // function save Movie ( Request $'Movie' ){
        function save_Movies (Request $movies)
        {
        $movie = new movie();

        $movie -> title = $movies->title;

        $movie->description = $movies ->description;
        $movie->rating = "0";
        $movie->language = $movies ->language;
        $movie->Save();
        return "Data Saved";

        // return $movie;
        // return redirect () ->back();
        // return redirect () ->route();
    }
    } 


