<?php

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
    return view('games.main');
});

Auth::routes();

Route::resource('ps1', 'Ps1Controller');
Route::get('/home', 'HomeController@index')->name('home');





