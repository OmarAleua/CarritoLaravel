<?php

namespace Tests\Feature\Integration;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ProductControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
