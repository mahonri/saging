<?php

class ContentSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();


		
		Employee::create(array(
			'username' => '00052',
			'fullname' => 'lazy',
			'adusername' => 'bone',
			'email' => 'me',
		));

		Employee::create(array(
			'username' => '01102',
			'fullname' => 'buzy',
			'adusername' => 'bug',
			'email' => 'me',
		));

		Lfcsystem::create(array(
			'name' => 'Portal',
			'description' => 'manage the portal system',
			'user_id' => 1,
		));

		Lfcsystem::create(array(
			'name' => 'System X',
			'description' => 'manage the x system',
			'user_id' => 2,
		));

		Account::create(array(
			'lfcsystem_id' => 1,
			'employee_id' => '1',
			'username' => 'tkqa',
		));

		Account::create(array(
			'lfcsystem_id' => 2,
			'employee_id' => '1',
			'username' => 'tkqa',
		));

		


	}

}