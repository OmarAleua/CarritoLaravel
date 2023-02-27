<?php

namespace Tests\Feature\Functional;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ProductControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function un_usuario_puede_ingresar_raiz()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @test */
    public function un_usuario_puede_ingresar_carrito()
    {
        $response = $this->get('/cart');

        $response->assertStatus(200);
    }

    /** @test */
    public function un_usuario_puede_ingresar_comprar()
    {
        $response = $this->get('/checkout');

        $response->assertStatus(200);
    }
}
