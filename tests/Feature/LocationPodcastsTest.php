<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Location;
use App\Podcast;

class LocationPodcastsTest extends TestCase
{
	use DatabaseMigrations;

    /** @test **/
    public function can_get_a_locations_podcast() {
    	$location = factory(Location::class)->create();

    	$podcast = factory(Podcast::class)->make([
    		'title' => 'example title',
    		'src' => 'http://www.example.com'
		]);

		$location->podcasts()->save($podcast);

		$this->assertCount(1, $location->podcasts()->get());
    }
}
