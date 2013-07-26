<?php

class GroupController extends BaseController {

	public function index()
	{
		return View::make('groups.index')
				->with('groups', Sentry::getGroupProvider()->findAll());
	}

	public function show()
	{
		
	}

	public function create()
	{
		return View::make('groups.create')
				->with('permissions', Permission::all());
	}

	public function store()
	{
		$permissions = array();
		$submittedpermissions = Input::get('permissions');
		if(count($submittedpermissions)>0)
		{
			foreach ($submittedpermissions as $permission) {
				$permissions[$permission] = 1;
			}
		}
		$group = Sentry::getGroupProvider()->create(array(
	        'name' => Input::get('name'),
	        'permissions' => $permissions,
    	));
    	return Redirect::route('groups.index');
	}

}