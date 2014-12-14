<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

//My about page
Route::get('about',function(){
	return View::make('about');
});

//contact page
Route::get('contact','PagesController@contact');

//users
Route::resource('users','UsersController');