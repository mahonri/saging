<?php 

class Role extends Eloquent {

	protected $softDelete = true;

	public function lfcsystem() 
	{
		return $this->belongsTo('Lfcsystem');
	}
	
	public function accounts() 
	{
		return $this->belongsToMany('Account');
	}

}