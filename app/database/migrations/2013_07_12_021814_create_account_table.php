<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('accounts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username');
			$table->unsignedInteger('employee_id');
			$table->foreign('employee_id')
					->references('id')
					->on('employees');
			$table->unsignedInteger('lfcsystem_id');
			$table->foreign('lfcsystem_id')
					->references('id')
					->on('lfcsystems');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('accounts');
	}

}
