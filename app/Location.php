<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function podcasts()
    {
    	return $this->hasOne('App\Podcast');
    }
}
