<?php

use Illuminate\Database\Seeder;
use App\Teacher;

class TeachersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		Teacher::create([
			'id' => '1',
			'name' => 'Bill Gates',
			'knowledge' => 'english',
		]);

		Teacher::create([
			'id' => '2',
			'name' => 'Steve Wozniak',
			'knowledge' => 'portuguese',
		]);

	}
}
