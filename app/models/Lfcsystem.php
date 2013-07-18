<?php 

class Lfcsystem extends Eloquent {

	protected $softDelete = true;

	public function accounts() {
		return $this->hasMany('Account');
	}
	
}