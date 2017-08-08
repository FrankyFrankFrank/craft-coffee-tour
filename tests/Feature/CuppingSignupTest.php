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

    /** @test **/
    public function limited_users_can_rsvp_to_cupping() {
    	$users = factory(User::class, 20)->create();

    	$timeslot = factory(Timeslot::class)->create([
    		'guest_limit' => 10
		]);

		$users->each(function($user) use ($timeslot) {
			$user->reserve($timeslot);
		});

		$this->assertCount(10, $timeslot->users()->get());
    }

	/** @test **/
	public function can_reserve_timeslot_with_no_limit() {
		$user = factory(User::class)->create();

    	$timeslot = factory(Timeslot::class)->create([
    		'guest_limit' => null
		]);

		$user->reserve($timeslot);

		$this->assertCount(1, $timeslot->users()->get());
	}

}
