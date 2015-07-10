<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Registration
Route::get('register', 'PageController@home');
Route::post('register', 'Auth\AuthController@postRegister');

//Authentication
Route::get('login', 'PageController@home');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

//Static pages
Route::get('/', "PageController@home");
Route::get('home', "PageController@home");
Route::get('about', "PageController@about");
Route::get('contact', "PageController@contact");

//Cardpacks
/*Route::get('cardpacks', "CardpacksController@index");
Route::get('cardpacks/create', 'CardpacksController@create');
Route::get('cardpacks/{id}', "CardpacksController@show");
Route::post('cardpacks', 'CardpacksController@store');
Route::get('cardpacks/{id}/edit', 'CardpacksController@edit');
Route::get('cardpacks/{id}/delete', 'CardpacksController@delete');*/

Route::resource("cardpacks", "CardpacksController");



