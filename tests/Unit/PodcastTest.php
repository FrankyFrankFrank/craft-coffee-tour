<?php

namespace Tests\Feature\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Podcast;

class PodcastTest extends TestCase
{
	use DatabaseMigrations;

    /** @test **/
    public function can_create_podcast() {
    	$podcast = factory(Podcast::class)->create();

    	$this->assertCount(1, Podcast::all());
    }

}
