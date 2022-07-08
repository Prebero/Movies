<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PagesController extends Controller
{
    public function homepage()
    {
        $movies = Movie::all();

        return view('welcome', compact('movies'));
    }
    // function save Movie ( Request $'Movie' ){
    function save_Movies(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:movies|max:255',
            'description' => 'required|string',
            'language' => 'required|string',
            'file' => 'required|image'
        ]);

        $movie = new movie();

        $movie->create([
            'title' => $request->title,
            'description' => $request->description,
            'rating' => "0",
            'language' => $request->language,
            'poster' => $request->file('file')->store('images', ['disk'=>'public']),
        ]);

        return redirect()->route('home');
    }
}
