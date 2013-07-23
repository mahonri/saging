<?php

class Accountstate extends Eloquent {

	public function account() 
	{
		return $this->belongsTo('Account');
	}

}