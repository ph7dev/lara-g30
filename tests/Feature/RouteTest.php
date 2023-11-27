<?php

namespace Tests\Feature;

use Tests\TestCase;

class RouteTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_valid_name_param(): void
    {
        $response = $this->get('/hello/world');
        $response->assertStatus(200);
    }

    public function test_valid_name_id_param(): void
    {
        $response = $this->get('/hello/world/777');
        $response->assertStatus(200);
    }
}
