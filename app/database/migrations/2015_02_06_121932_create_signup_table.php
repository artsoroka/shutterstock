<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSignupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{	
		Schema::dropIfExists('signup_users'); 
		Schema::create('signup_users', function($table){
			$table->increments('id'); 
			$table->string('email');
			$table->string('login'); 
			$table->string('password'); 
			$table->string('confirmation_token', 255); 
			$table->string('status'); 
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
		Schema::drop('signup_users'); 
	}

}
