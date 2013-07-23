<?php

class RoleController extends BaseController {

	public function systemrole($id)
	{
		return View::make('roles.create')->with('id', $id);
	}

	public function index() 
	{

	}

	public function show()
	{

	}

	public function create() 
	{
		return View::make('roles.create');
	}

	public function store()
	{
		$role = new Role;
		$role->name = Input::get('name');
		$role->description = Input::get('description');
		$lfcsystem = Lfcsystem::find(Input::get('system_id'));
		$lfcsystem->roles()->save($role);
		return Redirect::route('lfcsystems.show', Input::get('system_id'));
	}

	public function edit()
	{

	}

	public function update()
	{

	}

	public function destroy() 
	{

	} 


}