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

    $data = [
        "nickname" => "tambu05"
    ];

    return view('home', $data);
});

// rotta per la pagina 1
Route::get('/user_profile', function () {

    // creo un array
    $user = [
        "nickname" => "tambu05",
        "name" => "Giovanni",
        "surname" => "Tamburini",
        "age" => 31,
        "email" => "gio@email.com"
    ];

    return view('user_profile', $user);
});

// rotta per la pagina 2
Route::get('/user_friends', function () {

    $friends = [
        'friend01',
        'friend02',
        'friend03',
        'friend04',
        'friend05',
    ];

    return view('user_friends', compact('friends'));
});

// rotta per la pagina 3
Route::get('/first_person_game', function () {

    $name = "Call of duty";
    $firstPerson = true;

    return view('first_person_game', compact('name', 'firstPerson'));
});
