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
		Schema::dropIfExists('users');
		
		Schema::create('users', function($table)
		{
		    $table->increments('id');
		    $table->string('email');
		    $table->string('login');
		    $table->string('password');
		    $table->string('pswd');
		    $table->string('role');
		    $table->string('remember_token');  
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
		Schema::drop('users');
	}

}
