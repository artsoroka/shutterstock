<?php 

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
        	'email' => 'hello@user.com',
        	'login' => 'user', 
        	'password' => Hash::make('password'), 
        	'pswd' => 'привет'
        ));
    }

}