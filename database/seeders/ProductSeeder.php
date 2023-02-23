<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Product::create([
            'name' => 'DRYSTONE',
            'description' => 'CAMISETA INTERIOR COMPRESIVA DE MUJER',
            'image' => 'https://cdn.siroko.com/products/634da31e113fa/1200x/crop_center.jpg?v=1666032561',
            'price' => 8048.00
        ]);

        Product::create([
            'name' => 'LANDHAUSPLATZ',
            'description' => 'GAFAS DE SOL ORIGINALS',
            'image' => 'https://cdn.siroko.com/s/files/1/1220/6874/products/gafas-landhausplatz-flotando/1200x/crop_center.jpg?v=1635209600',
            'price' => 7223.00
        ]);

        Product::create([
            'name' => 'J2 TOURMALET',
            'description' => 'CHAQUETAS DE LLUVIA CICLISMO HOMBRE',
            'image' => 'https://cdn.siroko.com/s/files/1/1220/6874/products/siroko-tourmalet-j2-rain-jacket-estudio-lifestyle-01_v2/882/1158/crop_center.jpg?v=1659541168',
            'price' => 18367.00
        ]);

        Product::create([
            'name' => 'M2 FINISH LINE',
            'description' => 'MAILLOT DE MANGA LARGA HOMBRE',
            'image' => 'https://cdn.siroko.com/s/files/1/1220/6874/products/m2-finish-line-long-sleeve-cycling-jersey-estudio-lifestyle-01/1200x/crop_center.jpg?v=1675958805',
            'price' => 10112.00
        ]);

        Product::create([
            'name' => 'M4 PAVÉ',
            'description' => 'MAILLOT CICLISMO TÉRMICO MUJER',
            'image' => 'https://cdn.siroko.com/s/files/1/1220/6874/products/pave-maillot-m4-cycling-lifestyle-estudio-01_v1/1200x/crop_center.jpg?v=1676547029',
            'price' => 14240.00
        ]);

        Product::create([
            'name' => 'S1 BLACK KAPELMUUR',
            'description' => 'CALCETINES PARA CICLISMO',
            'image' => 'https://cdn.siroko.com/products/63db7964c48f0/1200x/crop_center.jpg?v=1675346396',
            'price' => 2889.00
        ]);
    }
}
