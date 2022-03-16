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

// HOME
Route::get('/', function () {
    return view('home');
})->name('home');

// CHARACTERS
Route::get('/characters', function () {
    return view('characters');
})->name('characters');

// COMICS
Route::get('/comics', function () {
    $comics = config('comics');
    return view('comics', ['comics' => $comics]);
})->name('comics');

Route::get('/comics/{id}', function ($id) {
    dump($id);
    $comics = config('comics');
    $comic = $comics[$id];
    return view('comics.comic', compact('comic'));
})->name('comic');

// MOVIES
Route::get('/movies', function () {
    return view('movies');
})->name('movies');

// TV
Route::get('/tv', function () {
    return view('tv');
})->name('tv');

// GAMES
Route::get('/games', function () {
    return view('games');
})->name('games');

// COLLECTIBLES
Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

// VIDEOS
Route::get('/videos', function () {
    return view('videos');
})->name('videos');

// FANS
Route::get('/fans', function () {
    return view('fans');
})->name('fans');

// NEWS
Route::get('/news', function () {
    return view('news');
})->name('news');

// SHOP
Route::get('/shop', function () {
    return view('shop');
})->name('shop');
