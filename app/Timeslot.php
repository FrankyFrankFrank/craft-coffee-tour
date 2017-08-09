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

	public function limited_space()
	{
		return isset($this->guest_limit);
	}

	public function full()
	{
		return ($this->limited_space() && $this->users()->get()->count() >= $this->guest_limit);
	}
}
