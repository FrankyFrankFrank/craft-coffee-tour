<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Timeslot extends Model
{
	public function users()
	{
		return $this->hasMany('App\User');
	}
}
