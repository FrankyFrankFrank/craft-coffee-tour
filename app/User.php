<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Timeslot;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function timeslot()
    {
        return $this->belongsTo('App\Timeslot');
    }

    public function reserve($timeslot)
    {
        if($timeslot->full()) {
            return;
        }
        $timeslot->users()->save($this);
    }
}
