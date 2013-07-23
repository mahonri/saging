<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountRoleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('account_role', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('account_id');
			$table->foreign('account_id')
					->references('id')
					->on('accounts');
			$table->unsignedInteger('role_id');
			$table->foreign('role_id')
					->references('id')
					->on('roles');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('account_role');
	}

}
