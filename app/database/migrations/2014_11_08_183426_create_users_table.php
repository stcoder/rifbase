<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user', function($table) {
			$table->increments('id')->unsigned();

			$table->string('email', 100)->unique();
			$table->string('password');
			$table->enum('role', array('user', 'organization', 'moderator', 'administrator'));
			$table->rememberToken();


			$table->softDeletes();
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
		Schema::dropIfExists('user');
	}

}
