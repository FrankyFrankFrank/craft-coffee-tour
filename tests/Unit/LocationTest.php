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

    /** @test **/
    public function can_create_a_location() {
    	$location = factory(Location::class)->create([
    		'shortname' => 'examplecafe',
    		'name' => 'Example Cafe',
    		'description' => 'Looks and smells like an example',
    		'address' => '50 Example St. Nowhere, ON M6H 2Z3',
    		'phone' => '555 555-5555',
    		'image' => 'fake-image.jpg',
    		'feature_image' => 'fancy-image.jpg',
    		'drink' => 'Fake Drink',
    		'article' => 'Example Article',
    	]);

    	$this->assertEquals('examplecafe', Location::find($location->id)->shortname);
    	$this->assertEquals('Example Cafe', Location::find($location->id)->name);
    	$this->assertEquals('Looks and smells like an example', Location::find($location->id)->description);
    	$this->assertEquals('50 Example St. Nowhere, ON M6H 2Z3', Location::find($location->id)->address);
    	$this->assertEquals('555 555-5555', Location::find($location->id)->phone);
    	$this->assertEquals('fake-image.jpg', Location::find($location->id)->image);
    	$this->assertEquals('fancy-image.jpg', Location::find($location->id)->feature_image);
    	$this->assertEquals('Fake Drink', Location::find($location->id)->drink);
    	$this->assertEquals('Example Article', Location::find($location->id)->article);
    	$this->assertNull(Location::find($location->id)->soundcloud);
    }
}
