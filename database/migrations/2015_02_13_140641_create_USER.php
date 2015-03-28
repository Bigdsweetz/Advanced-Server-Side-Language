<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUSER extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($theUser)
		{
			$theUser->increments('id');
			$theUser->string('firstname');
			$theUser->string('lastname');
			$theUser->string('username');
			$theUser->string('email');
			$theUser->integer('year');
			$theUser->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
