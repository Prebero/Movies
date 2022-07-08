<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**/



Route::get('/', [\App\Http\Controllers\Pages\PagesController::class,'homepage'])->name('home');

Route::get('/Login',function(){ return view('Login'); });
Route::get('/Detail',function(){ return view('Detail'); });
Route::get('/Dashboard',function(){ return view('Dashboard'); });
Route::get('/AddMovie',function(){ return view('AddMovie'); })->name('add.movie');
Route::post('/save', [\App\Http\Controllers\Pages\PagesController::class,'save_Movies'])->name('save_movie');
