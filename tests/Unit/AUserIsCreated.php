<?php

namespace Tests\Unit;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;

class AUserIsCreated extends TestCase
{

    use RefreshDatabase ;

    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    /* @test */
    public function aUserIscreated()
    {
        $user = factory('App\User')->create();
        $this->assertCount(1, User::all());
    }
}
