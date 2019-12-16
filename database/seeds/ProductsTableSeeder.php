<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{

    public function run()
    {
         Product::insert([
             'name' => 'Niza',
             'precio' => '100',
             'detail' => 'detalle',
             'img' => 'producto1a.jpeg',
         ]);
         Product::insert([
            'name' => 'Niza',
            'precio' => '200',
            'detail' => 'detalle',
            'img' => 'producto1a.jpeg',
        ]);
        Product::insert([
            'name' => 'Niza',
            'precio' => '300',
            'detail' => 'detalle',
            'img' => 'producto1a.jpeg',
        ]);
        Product::insert([
            'name' => 'Niza',
            'precio' => '400',
            'detail' => 'detalle',
            'img' => 'producto1a.jpeg',
        ]);
        Product::insert([
            'name' => 'Niza',
            'precio' => '500',
            'detail' => 'detalle',
            'img' => 'producto1a.jpeg',
        ]);
        Product::insert([
            'name' => 'Niza',
            'precio' => '600',
            'detail' => 'detalle',
            'img' => 'producto1a.jpeg',
        ]);
        Product::insert([
            'name' => 'Niza',
            'precio' => '700',
            'detail' => 'detalle',
            'img' => 'producto1a.jpeg',
        ]);
        Product::insert([
            'name' => 'Niza',
            'precio' => '800',
            'detail' => 'detalle',
            'img' => 'producto1a.jpeg',
        ]);
    }
}
