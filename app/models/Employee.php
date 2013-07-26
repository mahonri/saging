<?php

class Employee extends Eloquent {

	public function accounts()
	{
		return $this->hasMany('Account');
	}
	
}