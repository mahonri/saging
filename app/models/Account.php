<?php 

class Account extends Eloquent {

	protected $softDelete = true;

	public function lfcsystem() {
		return $this->belongTo('Lfcsystem');
	}
}