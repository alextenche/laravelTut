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
	$data = ['name' => 'alex', 'email' => 'alex@tenche.com'];
	// return View::make('hello', array('name' => 'friend' ));
	// return View::make('hello')->with('name', 'amigo');
	return View::make('hello')->with($data);
});

Route::get('/hello/{name?}', function($name = 'world')
{
	return View::make('hello')->with('name', $name);
});
