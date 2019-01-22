<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{

	protected $fillable = [
		'teacher_id',
		'min_students',
		'max_students',
		'slug',
		'title',
	];

	public function teacher()
	{
		return $this->hasOne(Teacher::class, "id", "teacher_id");
	}

}
