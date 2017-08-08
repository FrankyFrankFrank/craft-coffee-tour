<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\User;
use App\Timeslot;

class UserTest extends TestCase
{
	use DatabaseMigrations;

    /** @test **/
    public function user_can_belong_to_a_timeslot() {
    	$user = factory(User::class)->create();
    	$timeslot = factory(Timeslot::class)->create();

    	$timeslot->users()->save($user);

    	$this->assertEquals($user->name, $timeslot->users()->first()->name);
    }

    /** @test **/
    public function reserve_a_timeslot() {
    	$user = factory(User::class)->create();
    	$timeslot = factory(Timeslot::class)->create();

    	$user->reserve($timeslot);

    	$this->assertEquals($user->name, $timeslot->users()->first()->name);
    }
}
