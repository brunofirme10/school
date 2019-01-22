<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

	protected $fillable = [
		'team_id',
		'name',
		'born_at',
	];

	/**
	 * relacionamento da tabela students com a tabela teams
	 * @return object
	 */
	public function team()
	{
		return $this->hasOne(Team::class, "id", "team_id");
	}

}
