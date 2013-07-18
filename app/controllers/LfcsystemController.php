<?php 

class LfcsystemController extends BaseController {

	public function index() 
	{
		return View::make('lfcsystems.index')->with('lfcsystems',  Lfcsystem::paginate(15));
	}

	public function show($id) 
	{
		$lfcsystem = Lfcsystem::find($id);
		$accounts = $lfcsystem->accounts()->paginate(10);
		return View::make('lfcsystems.show')
			->with('lfcsystem', $lfcsystem)
			->with('accounts', $accounts);
	}

	public function create() 
	{
		return View::make('lfcsystems.create');
	}

	public function store()
	{
		$lfcsystem = new Lfcsystem;
		$lfcsystem->name = Input::get('name');
		$lfcsystem->admin = Input::get('admin');
		$lfcsystem->description = Input::get('description');
		$lfcsystem->save();
		return Redirect::route('lfcsystems.index');
	}

	public function edit($id)
	{
		return View::make('lfcsystems.edit')->with('lfcsystem', Lfcsystem::find($id));
	}

	public function update($id)
	{
		$lfcsystem = Lfcsystem::find($id);
		$lfcsystem->name = Input::get('name');
		$lfcsystem->admin = Input::get('admin');
		$lfcsystem->description = Input::get('description');
		$lfcsystem->save();
		return Redirect::route('lfcsystems.show', $lfcsystem->id);
	}

	public function destroy($id)
	{
		$lfcsystem = Lfcsystem::find($id);
		$lfcsystem->delete();
		return Redirect::route('lfcsystems.index');
	}

}
