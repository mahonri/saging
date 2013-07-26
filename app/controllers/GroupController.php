<?php

class GroupController extends BaseController {

	public function index()
	{
		return View::make('groups.index')->with('groups', Sentry::getGroupProvider()->findAll());
	}

	public function show()
	{
		
	}

	public function create()
	{
		return View::make('groups.create');
	}

	public function store()
	{
		$group = Sentry::getGroupProvider()->create(array(
	        'name' => Input::get('name'),
    	));
    	return Redirect::route('groups.index');
	}

}