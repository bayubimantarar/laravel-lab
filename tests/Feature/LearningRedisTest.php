<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LearningRedisTest extends TestCase
{
    /**
     * A basic feature test example.
     * @test
     * @group LearningRedis
     * @return void
     */
    public function getMainPage()
    {
        $this
            ->get('/learning-redis')
            ->assertStatus(200);
    }

    /**
     * A basic feature test example.
     * @test
     * @group LearningRedis
     * @return void
     */
    public function getWithRedisPage()
    {
        $this
            ->get('/learning-redis/with-redis')
            ->assertStatus(200);
    }
}
