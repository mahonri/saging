<?php

class AuthenticationController extends BaseController {

	public function getLogin()
	{
		return View::make('auths.login');
	}

	public function postLogin()
	{
		$credentials = array(
			'email' => Input::get('email'),
			'password' => Input::get('password')
		);

		try {
			$user = Sentry::authenticate($credentials, false);
			
			if ($user) 
			{
				return Redirect::route('lfcsystems.index');
			}

		} catch (Exception $e) {
			return Redirect::route('auths.login')->withErrors(array('login' => $e->getMessage()));
		}
	}

	public function getLogout()
	{
		Sentry::logout();

		return Redirect::route('auths.login');
	}

}