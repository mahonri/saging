<?php

class SentrySeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();
		DB::table('groups')->delete();
		DB::table('users_groups')->delete();

		Sentry::getUserProvider()->create(array(
			'email'		=> 'rai@rai.com', 
			'password' 	=> 'rai',
			'first_name'=> 'rai',
			'last_name'	=> 'cag',
			'activated' => 1,
		));

		Sentry::getUserProvider()->create(array(
			'email'		=> 'dakine@dakine.com', 
			'password' 	=> 'dakine',
			'first_name'=> 'dakine',
			'last_name'	=> 'aloha',
			'activated' => 1,
		));

		Sentry::getGroupProvider()->create(array(
			'name'		  => 'Admin',
			'permissions' => array('admin' => 1),
		));


		Sentry::getGroupProvider()->create(array(
			'name'		  => 'Reg',
			'permissions' => array('reg' => 1),
		));

		$adminUser = Sentry::getUserProvider()->findByLogin('rai@rai.com');
		$adminGroup = Sentry::getGroupProvider()->findByName('Admin');
		$adminUser->addGroup($adminGroup);

		$regUser = Sentry::getUserProvider()->findByLogin('dakine@dakine.com');
		$regGroup = Sentry::getGroupProvider()->findByName('Reg');
		$regUser->addGroup($regGroup);
	}
}