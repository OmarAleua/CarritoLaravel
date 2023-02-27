<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Product;

class CartTest extends TestCase
{

    use RefreshDatabase;

    /** @test */
    public function poder_agregar_articulo_al_carrito()
    {
        Product::factory()->count(3)->create();

        $this->post('/cart', [
            'id' => 1,
        ])
        ->assertRedirect('/cart')
        ->assertSessionHasNoErrors()
        ->assertSessionHas('cart.0', [
            'id' => 1,
            'quantity' => 1,
        ]);
    }

    /** @test */
    public function no_poder_agregar_el_mismo_articulo_2_veces()
    {
        Product::factory()->create([
            'name' => 'DRYSTONE',
            'price' => 8048,
        ]);
        Product::factory()->create([
            'name' => 'M4 PAVÉ',
            'price' => 14240,
        ]);
        Product::factory()->create([
            'name' => 'LANDHAUSPLATZ',
            'price' => 7223,
        ]);

        $this->post('/cart', [
            'id' => 1, // DRYSTONE
        ]);
        $this->post('/cart', [
            'id' => 1, // DRYSTONE
        ]);
        $this->post('/cart', [
            'id' => 2, // M4 PAVÉ
        ]);

        $this->assertEquals(2, count(session('cart')));

    }

    /** @test */
    public function poder_acceder_a_la_vista_carrito()
    {
        Product::factory()->count(3)->create();

        $this->get('/cart')
            ->assertViewIs('cart');

    }

    /** @test */
    public function articulos_agregados_poder_verlos_en_la_vista()
    {

        Product::factory()->create([
            'name' => 'DRYSTONE',
            'price' => 8048,
        ]);
        Product::factory()->create([
            'name' => 'M4 PAVÉ',
            'price' => 14240,
        ]);
        Product::factory()->create([
            'name' => 'LANDHAUSPLATZ',
            'price' => 7223,
        ]);

        $this->post('/cart', [
            'id' => 1, // DRYSTONE
        ]);
        $this->post('/cart', [
            'id' => 3, // LANDHAUSPLATZ
        ]);

        $cart_items = [
            [
                'id' => 1,
                'quantity' => 1,
                'name' => 'DRYSTONE',
                'image' => 'some-image.jpg',
                'price' => 8048,
            ],
            [
                'id' => 3,
                'quantity' => 1,
                'name' => 'LANDHAUSPLATZ',
                'image' => 'some-image.jpg',
                'price' => 7223,
            ],
        ];

        $this->get('/cart')
            ->assertViewHas('cart_items', $cart_items)
            ->assertSeeTextInOrder([
                'DRYSTONE',
                'LANDHAUSPLATZ',
            ])
            ->assertDontSeeText('M4 PAVÉ');

    }

    /** @test */
    public function quitar_articulo_del_carrito()
    {

        Product::factory()->create([
            'name' => 'DRYSTONE',
            'price' => 8048,
        ]);
        Product::factory()->create([
            'name' => 'M4 PAVÉ',
            'price' => 14240,
        ]);
        Product::factory()->create([
            'name' => 'LANDHAUSPLATZ',
            'price' => 7223,
        ]);

        // agregar items a la sesion
        session(['cart' => [
            ['id' => 2, 'quantity' => 1], // M4 PAVÉ
            ['id' => 3, 'quantity' => 3], // DRYSTONE
        ]]);

        $this->delete('/cart/2') // eliminar M4 PAVÉ
            ->assertRedirect('/cart')
            ->assertSessionHasNoErrors()
            ->assertSessionHas('cart', [
                ['id' => 3, 'quantity' => 3]
        ]);

        // verifica que la vista del carrito muestre los artículos esperados
        $this->get('/cart')
            ->assertSeeInOrder([
                'LANDHAUSPLATZ', // item nombre
                '$7223', // precio
                '3', // cantidad
            ])
            ->assertDontSeeText('M4 PAVÉ');

    }

    /** @test */
    public function cantidad_articulo_se_puede_actualizar()
    {
        Product::factory()->create([
            'name' => 'DRYSTONE',
            'price' => 8048,
        ]);
        Product::factory()->create([
            'name' => 'M4 PAVÉ',
            'price' => 14240,
        ]);
        Product::factory()->create([
            'name' => 'LANDHAUSPLATZ',
            'price' => 7223,
        ]);

        // agregar items a la sesion
        session(['cart' => [
            ['id' => 1, 'quantity' => 1], // DRYSTONE
            ['id' => 3, 'quantity' => 1], // LANDHAUSPLATZ
        ]]);

        $this->patch('/cart/3', [ // actualizar la cantidad de LANDHAUSPLATZ a 5
            'quantity' => 5,
        ])
        ->assertRedirect('/cart')
        ->assertSessionHasNoErrors()
        ->assertSessionHas('cart', [
            ['id' => 1, 'quantity' => 1],
            ['id' => 3, 'quantity' => 5],
        ]);

        // verifica que la vista del carrito muestre los artículos esperados
        $this->get('/cart')
            ->assertSeeInOrder([
                // Item #1
                'DRYSTONE',
                '$8048',
                '1',

                // Item #2
                'LANDHAUSPLATZ',
                '$7223',
                '5',
            ]);

    }
}
