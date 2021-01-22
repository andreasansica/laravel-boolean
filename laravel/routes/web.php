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
    return view('welcome');
});

Route::get('/helloAll', function () {
    return view('helloAll');
});

Route::get('/helloYou', function () {
    return view('helloYou',
    [
      'name' => 'Luigi'
    ]);
});

Route::get('/helloYou2', function () {
    return view('helloYou',
    [
      'name' => 'Marco'
    ]);
});

Route::get('holaTodo', 'MainController@holaTodo');

Route::get('holaTu', 'MainController@holaTu');

Route::get('holaTu', 'MainController@holaTu2');
