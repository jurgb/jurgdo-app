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
		Schema::create('users', function($gebruiker)
		{
		    $gebruiker->increments('id');
		    $gebruiker->String('name');
		    $gebruiker->String('firstname');
		    $gebruiker->String('email');
		    $gebruiker->String('password');
            $gebruiker->string('address')->nullable();
            $gebruiker->string('postalcode')->nullable();
            $gebruiker->string('city')->nullable();
            $gebruiker->string('image')->default('default.png');
		    $gebruiker->boolean('confirmed')->default(0);
            $gebruiker->string('confirmation_code')->nullable();
		    $gebruiker->string('remember_token', 100)->nullable();
		    $gebruiker->timestamps('');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('users');
	}

}
