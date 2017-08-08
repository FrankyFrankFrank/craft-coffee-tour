<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\User;
use App\Timeslot;

class TimeslotTest extends TestCase
{
	use DatabaseMigrations;

	/** @test **/
	public function timeslots_have_many_users() {
		$users = factory(User::class, 10)->create();
		$timeslot = factory(Timeslot::class)->create();

		$users->each(function($user) use ($timeslot) {
			$timeslot->users()->save($user);
		});

		$this->assertCount(10, $timeslot->users()->get());

	}
}
