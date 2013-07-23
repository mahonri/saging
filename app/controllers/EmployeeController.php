<?php

class EmployeeController extends BaseController {

	public function jsonlist()
	{
		$employees = Employee::where('lname', Input::get('lname'))->get();
		$aloha = array('test'=>'test');		
		return Response::json($employees);
	}

	public function index()
	{
		$employees = Employee::all();
		return View::make('employees.index')->with('employees', $employees);
	}

	public function show()
	{

	}

	public function create()
	{

	}

	public function store() 
	{

	}

}