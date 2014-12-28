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

/*
|--------------------------------------------------------------------------
| Get Routes
|--------------------------------------------------------------------------
|
| Here are all the ::get routes I use in this project.
|
*/

Route::get('/', 'HomeController@showWelcome');

Route::get('/app', 'AppController@showAppHome');


/*
|--------------------------------------------------------------------------
| Post Routes
|--------------------------------------------------------------------------
|
| Here are all the ::post routes I use in this project.
|
*/


/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
|
| Here are all the routes I use for a public API in this project.
|
*/

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