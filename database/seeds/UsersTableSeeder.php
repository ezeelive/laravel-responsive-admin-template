<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		User::create([
			'username' => 'Admin',
			'password' => 'admin321',
			'name' => 'Admin',
			'contact_no' => '9876543210',	
			'email' => 'admin@demo.com',
			'status' => '1',
			'profile_image' => 'abcd.jpg',
			'profile_summary' => 'Good Moring',
			'auth_key' => str_random(10),
			'remember_token' => str_random(10)			
		]);
    }
}
