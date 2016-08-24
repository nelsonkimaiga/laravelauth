<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Get route
Route::get('login', function () {
    return view::make('login');
});

Auth::routes();

Route::post('login', 'accountController@login');