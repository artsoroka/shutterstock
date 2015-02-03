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

Route::group(array('prefix'=>'home','before' => 'auth'), function()
{
    Route::get('/', function()
    {
        echo "welcome back home "; 
    });

});

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/login', 'AuthController@loginPage');
Route::post('/login', array('before' => 'loginFormValidation', 'uses' => 'AuthController@login'));
Route::get('/logout', 'AuthController@logout');
