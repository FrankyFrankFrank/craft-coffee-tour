<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
	/** @test **/
	public function landing_page() 
	{
		$response = $this->get('/');

		$response->assertStatus(200);
	}

	/** @test **/
	public function overview() 
	{
		$response = $this->get('/overview');

		$response->assertStatus(200);
	}

	/** @test **/
	public function rsvp_read() 
	{
		$response = $this->get('/rsvp');

		$response->assertStatus(200);
	}
}
