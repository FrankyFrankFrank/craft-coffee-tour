<?php

namespace Tests\Feature\feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CuppingSignupTest extends TestCase
{
    use DatabaseMigrations;

    /** @test **/
    public function user_can_rsvp_to_cupping() {
    	$user = factory(App\User::class)->create();

    	// Timeslot can have x number of users
    	$cupping_timeslot = factory(App\Timeslot::class)->create();

    	$user->reserve($timeslot);

    	$this->assertContains($user, $timeslot->users);
    }
}
