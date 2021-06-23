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

Route::get('/', function () {
    return view('homeview');
});

Auth::routes();

Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', function () {
    return view('puzzle.start');
});

//Puzzle 2
Route::get('/3hf2mf', function () {
    return view('puzzle.3hf2mf');
});

//Puzzle 3
Route::get('/914640', function() {
    return view('puzzle.914640');
});

//Puzzle 4

Route::get('/4440SK', function() {
    return view('puzzle.4440SK');
});

Route::get('/ehwhet105', function() {
    return view('puzzle.ehwhet105');
});

Route::get('/MINIMUM12SZ6713', function() {
    return view('puzzle.MINIMUM12SZ6713');
});
