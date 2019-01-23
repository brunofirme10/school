<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

	protected $fillable = [
		'name',
		'knowledge',
	];

	/**
	 * relacionamento da tabela teachers com a tabela teams
	 * @return object
	 */
	public function teams()
	{
		return $this->hasMany(Team::class, "teacher_id", "id");
	}

	public function getKnowledge()
	{
		$knowledges = [
			'english' => 'Inglês',
			'portuguese' => 'Português',
			'biology' => 'Biologia',
		];
		return $knowledges[$this->knowledge];
	}

}
