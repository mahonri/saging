<?php 

class Account extends Eloquent {

	protected $softDelete = true;

	public function lfcsystem() 
	{
		return $this->belongTo('Lfcsystem');
	}

	public function accountstates()
	{
		return $this->hasMany('Accountstate')->orderBy('created_at', 'DESC');
	}

	public function roles()
	{
		return $this->belongsToMany('Role');
	}
}