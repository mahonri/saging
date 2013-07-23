<?php 

class Lfcsystem extends Eloquent {

	protected $softDelete = true;

	public function accounts() 
	{
		return $this->hasMany('Account');
	}

	public function user() 
	{
		return $this->belongsTo('User');
	}

	public function roles() 
	{
		return $this->hasMany('Role');
	}
	
}