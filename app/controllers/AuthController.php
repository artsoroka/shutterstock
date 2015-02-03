<?php

class AuthController extends \BaseController {

	/**
	 * Show login page to the user 
	 *
	 * @return Response
	 */
	public function loginPage()
	{
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

		if(Auth::attempt($userCredentials)){
		    return "login successful"; 
		}

		return Redirect::to('/login')
			->withErrors('login or password is invalid'); 

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
