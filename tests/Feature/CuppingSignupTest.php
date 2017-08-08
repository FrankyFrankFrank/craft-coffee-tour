<?php

namespace Tests\Feature\feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use \App\User;
use \App\Timeslot;

class CuppingSignupTest extends TestCase
{
    use DatabaseMigrations;

    /** @test **/
    public function user_can_rsvp_to_cupping() {
    	$user = factory(User::class)->create();

    	// Timeslot can have x number of users
    	$timeslot = factory(Timeslot::class)->create();

    	$user->reserve($timeslot);

    	$this->assertEquals($user->name, $timeslot->users->first()->name);
    }
}
