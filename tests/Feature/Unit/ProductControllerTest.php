<?php

namespace Tests\Feature\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ProductControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function the_page_has_all_the_required_page_data()
    {
        // Arrange = Cree otro método de prueba que creará 6 productos en la base de datos:
        Product::factory()->count(6)->create();

        /* Act = Esta fase es donde hacemos que la prueba realice una acción específica 
        para probar la funcionalidad. En este caso, 
        todo lo que tenemos que hacer es visitar la página de inicio: */
        $response = $this->get('/');

        /* Assert = Aquí es donde probamos si la respuesta de la fase de "actuar" coincide con 
        lo que esperamos. En este caso, queremos probar que la vista que se está utilizando es 
        la search vista y que tiene los items datos requeridos: */
        $items = Product::get();

        $response->assertViewHas('items', $items);

    }

    /* La prueba anterior no probó que la página presente los elementos que el usuario necesita ver. 
    Esta prueba nos permite demostrarlo: */
        /** @test */
    public function the_page_shows_the_items()
    {
        Product::factory()->count(6)->create();
    
        $items = Product::get();
    
        $this->get('/')
            ->assertSeeInOrder([
                $items[0]->name,
                $items[1]->name,
                $items[2]->name,
                $items[3]->name,
                $items[4]->name,
                $items[5]->name,
            ]);
    }
}
