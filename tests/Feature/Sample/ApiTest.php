<?php

namespace Tests\Feature\Sample;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/register_user');
        $response->assertSee('token');
        $response->assertStatus(200);
    }
}
