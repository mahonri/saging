<?php

class PermissionController extends BaseController {

	public function index()
	{
		return View::make('permissions.index')->with('permissions', Permission::all());
	}

	public function show($id)
	{
		$permission = Permission::find($id); 
		return View::make('permissions.show')->with('permission', $permission);
	}

	public function create()
	{
		return View::make('permissions.create');
	}

	public function store()
	{
		$permission = new Permission;
		$permission->humanreadablename = Input::get('humanreadablename');
		$permission->computerreadablename = Input::get('computerreadablename');
		$permission->save();
		return Redirect::route('permissions.index');
	}

	public function edit()
	{
		return View::make('permissions.edit');
	}

	public function update($id)
	{
		$permission = Permission::find($id);
		$permission->humanreadablename = Input::get('humanreadablename');
		$permission->computerreadablename = Input::get('computerreadablename');
		$permission->save();
		return Redirect::route('permissions.index');
	}

	public function destroy($id)
	{
		$permission = Permission::find($id);
		$permission->delete();
		return Redirect::route('permissions.index');
	}

}