<?php

class EmployeeController extends BaseController {

	public function jsonlist()
	{
		$employees = Employee::where('fullname', 'LIKE' , Input::get('fullname').'%')->get();	
		return Response::json($employees);
	}

	public function index()
	{
		$employees = Employee::paginate(20);
		return View::make('employees.index')->with('employees', $employees);
	}

	public function show($id)
	{
		$employee = Employee::find($id);
		return View::make('employees.show')->with('employee', $employee);
	}

	public function create()
	{

	}

	public function store() 
	{

	}

	public function edit($id)
	{
		$employee = Employee::find($id);
		return View::make('employees.edit')->with('employee', $employee);
	}

	public function update($id)
	{
		$employee = Employee::find($id);
		$employee->adusername = Input::get('adusername');
		$employee->fullname = Input::get('fullname');
		$employee->email = Input::get('email');
		$employee->save();
		return Redirect::route('employees.show', $id);
	}

	public function destroy($id)
	{
		$employee = Employee::find($id);
		$employee->delete();
		return Redirect::route('employees.index');
	}

}