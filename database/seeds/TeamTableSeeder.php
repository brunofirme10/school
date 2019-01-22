<?php

use Illuminate\Database\Seeder;
use App\Team;

class TeamTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		Team::create([
			'id' => '1',
			'teacher_id' => '1',
			'min_students' => '10',
			'max_students' => '20',
			'slug' => 'english-class',
			'title' => 'English Class',
		]);

	}
}
