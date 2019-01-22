<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    protected $fillable = [
        'name', 'dateOfBirth', 'place', 'city', 'uf', 'personLegally'
    ];

    public function stundent(){
        return $this->hasOne('App\Team');
    }

}
