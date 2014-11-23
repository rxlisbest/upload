<?php

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'username' => 'roy',
			'password' => Hash::make('123'),

			'name' => '芮兴龙',
			'phone' => '13429170651',
			'mobile' => '13420170651',
		));
	}
}
