<?php

class AuthController extends \BaseController {

	/**
	 * Show login page to the user 
	 *
	 * @return Response
	 */
	public function loginPage()
	{	
		if( Auth::check() )
			return Redirect::to('/home'); 

		return View::make('auth.login'); 		
	}


	/**
	 * Authenticate user 
	 *
	 * @return Response
	 */
	public function login()
	{
		$userCredentials = array(
			'login' => Input::get('login'), 
			'password' => Input::get('password')
		); 

		if(Auth::attempt($userCredentials, $rememberMe = true)){
		    return "login successful"; 
		}

		return Redirect::to('/login')
				->withErrors('login or password is invalid'); 

	}


	/**
	 * Logout 
	 *
	 * @return Response
	 */
	public function logout()
	{
		Auth::logout(); 
		return Redirect::to('/'); 
	}

}
