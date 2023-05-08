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

// rotta per la homepage
Route::get('/', function () {

    return view('home');
});

// rotta per la pagina 1
Route::get('/page_one', function () {

    return view('page_one');
});

// rotta per la pagina 2
Route::get('/page_two', function () {

    return view('page_two');
});

// rotta per la pagina 3
Route::get('/page_three', function () {

    return view('page_three');
});

// rotta per la pagina 4
Route::get('/page_four', function () {

    return view('page_four');
});

// rotta per la pagina 5
Route::get('/page_five', function () {

    return view('page_five');
});
