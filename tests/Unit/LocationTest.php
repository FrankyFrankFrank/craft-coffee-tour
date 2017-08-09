<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Location;

class LocationTest extends TestCase
{
	use DatabaseMigrations;
	
    /** @test **/
    public function can_create_locations() {
    	$locations = factory(Location::class, 13)->create();

    	$this->assertCount(13, Location::all());
    }
}
