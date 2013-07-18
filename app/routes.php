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

Route::resource('lfcsystems', 'LfcsystemController');

Route::resource('accounts', 'AccountController');

Route::post('accounts/jsonrequest/{lfcsystem_id}', array(
	'as' => 'accounts.jsonrequest', 
	'uses' => 'AccountController@jsonrequest'));

Route::post('lfcsystems/jsonrequest', array(
	'as' => 'lfcsystems.jsonrequest', 
	'uses' => 'LfcsystemController@jsonrequest'));
	