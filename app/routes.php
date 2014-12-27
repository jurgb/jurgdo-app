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

Route::get('/angulardemo', function(){
	return View::make('angulardemo');
});

// -- end

Route::group(array('prefix' => 'api/v1'), function()
{
	Route::resource('notification', 'api\v1\NotificationController',
		array('only' => array('index', 'store', 'destroy')));
});

/*Route::group(array('prefix' => 'api/v2'), function()
{
	Route::resource('notification', 'api\v2\NotificationController',
		array('only' => array('index', 'store', 'destroy')));
});
*/