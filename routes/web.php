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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', "MainController@home");
Route::get('/home', "MainController@home");

Route::get('/webquests', "MainController@webquests");

Route::get('/lehrplan_integration', "MainController@lehrplan_integration");

Route::get('/impressum', "MainController@impressum");
