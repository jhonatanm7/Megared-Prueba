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

Route::get('/', 'CubeController@index');
Route::resource('cube', 'CubeController');
Route::post('/execute', ['as' => 'cube.execute', 'uses' => 'CubeController@execute']);
/*Route::get('inicio', function()
{
	return View::make('cube.index');
});*/
Route::get('ejercicio', function()
{
	return View::make('cube.ejercicio');
});
