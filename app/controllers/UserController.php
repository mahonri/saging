<?php

class UserController extends BaseController {

	public function index()
	{
		return View::make('users.index')
				->with('users', Sentry::getUserProvider()->findAll());

	}

	public function show()
	{

	}

	public function create()
	{
		return View::make('users.create')
					->with('groups', Sentry::getGroupProvider()->findAll());
	}

	public function store()
	{
		$user = Sentry::getUserProvider()->create(array(
        	'email'    => Input::get('email'),
        	'password' => Input::get('password'),
        	'first_name' => Input::get('first_name')
    	));
		foreach (Input::get('groups') as $groupid) {
			$group = Sentry::getGroupProvider()->findById($groupid);
			$user->addGroup($group);
		}

    	return Redirect::route('users.index');
	}

	public function edit($id)
	{

		$user = Sentry::getUserProvider()->findById($id);
		$groupids = array();
		foreach ($user->getGroups() as $group) {
			$groupids[] = $group->id;
		}
		return View::make('users.edit')->with('user', $user)
					->with('groups', Sentry::getGroupProvider()->findAll())
					->with('groupids', $groupids);
	}

	public function update($id)
	{
		$user = Sentry::getUserProvider()->findById($id);
		foreach ($user->getGroups() as $group) {
			$user->removeGroup($group);
		}
		if (count(Input::get('groups')) > 0) {
			foreach (Input::get('groups') as $groupid) {
				$group = Sentry::getGroupProvider()->findById($groupid);
				$user->addGroup($group);
			}
		}
		
		return Redirect::route('users.index');
	}

	public function destroy()
	{

	}

}