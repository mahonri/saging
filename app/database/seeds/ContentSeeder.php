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

		DB::table('lfcsystems')->delete();
		DB::table('accounts')->delete();

		Lfcsystem::create(array(
			'name' => 'Portal',
			'admin' => 'james bond',
			'description' => 'manage the portal system',
		));

		Lfcsystem::create(array(
			'name' => 'System X',
			'admin' => 'james bond',
			'description' => 'manage the x system',
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



	}

}