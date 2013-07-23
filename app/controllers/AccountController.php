<?php

class AccountController extends BaseController {

	public function jsonrequest($lfcsystem_id) 
	{

		$jsonData = array('page'=>1,'total'=>0,'rows'=>array());
		foreach(Lfcsystem::find($lfcsystem_id)->accounts AS $rowNum => $row){
            //If cell's elements have named keys, they must match column names
            //Only cell's with named keys and matching columns are order independent.
            
            $entry = array('id' => $rowNum,
                'cell'=>array(
                    'item1'	=> $row['emplid'],
                    'item2' => $row['username'],
                    'item3' => $row['email'],
                )
            );
            $jsonData['rows'][] = $entry;
        }
        $jsonData['total'] = 2;

        return Response::json($jsonData);
        
	}

	public function index() 
	{
		return View::make('accounts.index')->with('accounts', Account::all());
	}

	public function show($id)
	{
		return View::make('accounts.show')->with('account', Account::find($id));
	}

	public function create() 
	{
		return View::make('accounts.create');
	}

	public function store()
	{
		$lfcsystem_id = Input::get('lfcsystem_id');
		$lfcsystem = Lfcsystem::find($lfcsystem_id);
		$account = new Account;
		$account->emplid = Input::get('emplid');
		$account->username = Input::get('username');
		$account->email = Input::get('email');
		$lfcsystem->accounts()->save($account);

		$accountstate = new Accountstate;
		$accountstate->status = true;
		$account->accountstates()->save($accountstate);
		
		return Redirect::route('lfcsystems.show', $lfcsystem_id);
	}

	public function edit($id)
	{
		return View::make('accounts.edit')->with('account', Account::find($id));
	}

	public function update($id)
	{
		$account = Account::find($id);
		$account->emplid = Input::get('emplid');
		$account->username = Input::get('username');
		$account->email = Input::get('email');
		$account->save();
		return Redirect::route('accounts.index')->with('accounts', Account::all());
	}

	public function destroy($id)
	{
		$account = Account::find($id);
		$lfcsystem_id = $account->lfcsystem_id;
		$account->delete();
		return Redirect::route('lfcsystems.show', $lfcsystem_id);
	}

	public function changestatus($id)
	{
		$account = Account::find($id);
		if(count($account->accountstates) < 1) {
			$status = false;
		} else {
			$status = $account->accountstates->first()->status;
			$firstaccoutstate = $account->accountstates->first();
			$firstaccoutstate->ended_at = date("Y-m-d H:i:s"); 
			$firstaccoutstate->save();
		}
		
		$accountstate = new Accountstate;
		$accountstate->account()->associate($account);
		if ($status) {
			$accountstate->status = false;
		} else {
			$accountstate->status = true;
		}
		$accountstate->save();
		return Redirect::route('accounts.show', $id);
	}


}