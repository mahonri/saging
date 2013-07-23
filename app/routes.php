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
Route::get('auth/logout', array('as' => 'auths.logout', 'uses' => 'AuthenticationController@getLogout'));
Route::get('auth/login', array('as' => 'auths.login', 'uses' => 'AuthenticationController@getLogin'));
Route::post('auth/login', array('as' => 'auths.login.post', 'uses' => 'AuthenticationController@postLogin'));

Route::group(array('before' => 'auth.admin'), function() 
{
	Route::get('/', function()
	{
		return View::make('hello');
	});


	Route::resource('lfcsystems', 'LfcsystemController');

	Route::resource('accounts', 'AccountController');

	//Route::resource('employees', 'EmployeeController');

	Route::get('employees/jsonlist', array(
		'as' => 'employees.jsonlist',
		'uses' => 'EmployeeController@jsonlist',
	));

	Route::post('accounts/jsonrequest/{lfcsystem_id}', array(
		'as' => 'accounts.jsonrequest', 
		'uses' => 'AccountController@jsonrequest'
	));

	Route::put('accounts/changestatus/{id}', array(
		'as' => 'accounts.changestatus', 
		'uses' => 'AccountController@changestatus'	
	));

	Route::post('lfcsystems/jsonrequest', array(
		'as' => 'lfcsystems.jsonrequest', 
		'uses' => 'LfcsystemController@jsonrequest'
	));
		
});

