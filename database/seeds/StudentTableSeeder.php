<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	Student::create([
			'team_id' => '1',
			'name' => 'Bruno Firme',
			'born_at' => '1994-06-06',
    	]);

    	Student::create([
			'team_id' => '1',
			'name' => 'Maria da Luz',
			'born_at' => '1995-06-06',
    	]);

    }
}
