<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'DRYSTONE',
            'description' => 'CAMISETA INTERIOR COMPRESIVA DE MUJER',
            'image' => 'https://cdn.siroko.com/products/634da31e113fa/1200x/crop_center.jpg?v=1666032561',
            'price' => 8048.00
        ];
    }
}
