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

		User::create([
			'name' => 'Whatyson Neves',
			'email' => 'eu@whatysonneves.com',
			'email_verified_at' => now(),
			'password' => Hash::make('asdf1234'),
		]);

    }
}
