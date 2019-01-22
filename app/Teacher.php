<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

	protected $fillable = [
		'name',
		'knowledge',
	];

	public function teams()
	{
		return $this->hasMany(Team::class, "teacher_id", "id");
	}

}
