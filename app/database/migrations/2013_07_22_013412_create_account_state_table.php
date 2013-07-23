<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountStateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('accountstates', function(Blueprint $table)
		{
			$table->increments('id');
			$table->boolean('status');
			$table->unsignedInteger('account_id');
			$table->foreign('account_id')
					->references('id')
					->on('accounts');
			$table->dateTime('ended_at');
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
		Schema::drop('accountstates');
	}

}
