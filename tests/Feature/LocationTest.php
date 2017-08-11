<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\User;
use App\Location;

class LocationTest extends TestCase
{
	use DatabaseMigrations;

    /** @test **/
    public function user_can_view_a_location() {
    	$location = factory(Location::class)->create();
    	
    	$response = $this->get('/locations/' . $location->id);

    	$response->assertStatus(200);
    }

}
