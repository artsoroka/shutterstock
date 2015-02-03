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

Route::get('/login', function()
{	
	return View::make('auth.login');  
});

Route::post('/login', array('before' => 'loginFormValidation', function()
{   
	$userCredentials = array(
		'login' => Input::get('login'), 
		'password' => Input::get('password')
	); 

	if(Auth::attempt($userCredentials)){
	    return "login successful"; 
	}

	return Redirect::to('/login')->withErrors('login or password is invalid'); 


}));
