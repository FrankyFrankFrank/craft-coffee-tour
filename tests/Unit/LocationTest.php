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
    	$currentLocationCount = count(Location::all());
    	$locations = factory(Location::class, 13)->create();

    	$this->assertSame(13, count(Location::all()) - $currentLocationCount);
    }
}
