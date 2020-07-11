<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		\App\User::create([
			'name' => 'Admin',
			'email' => 'system@example.com',
			'password' => \Illuminate\Support\Facades\Hash::make('12345678')
		]);
	}
}
