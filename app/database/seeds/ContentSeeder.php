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

		DB::table('accounts')->delete();
		DB::table('lfcsystems')->delete();

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
			'emplid' => '99098',
			'username' => 'tkqa',
			'email' => 'aloha@yahoo.com',
		));

		Account::create(array(
			'lfcsystem_id' => 2,
			'emplid' => '0988',
			'username' => 'tkqa',
			'email' => 'aloha@yahoo.com',
		));

		Employee::create(array(
			'emplid' => '00052',
			'fname' => 'lazy',
			'mname' => 'bone',
			'lname' => 'me',
		));

		Employee::create(array(
			'emplid' => '01102',
			'fname' => 'buzy',
			'mname' => 'bug',
			'lname' => 'me',
		));


	}

}