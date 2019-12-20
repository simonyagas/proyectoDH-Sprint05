<?php
use Illuminate\Database\Seeder;
use App\Product;class ProductsTableSeeder extends Seeder
{
  public function run()
{
Product::insert([
'name' => 'Niza',
'precio' => '1000',
'detail' => 'Soga de algodón estilo Jean',
'img' => 'img/niza.jpg',
]);
Product::insert([
'name' => 'New York',
'precio' => '1000',
'detail' => 'Cuero Negro, Cadena, Trenza de algodón',
'img' => 'img/newyork.jpg',
]);
Product::insert([
'name' => 'Ibiza',
'precio' => '1000',
'detail' => 'Cuero Blanco, Mostacillas de Madera',
'img' => 'img/ibiza.jpg',
]);
Product::insert([
'name' => 'Texas',
'precio' => '1000',
'detail' => 'Cuero Marrón, Gancho Nautico',
'img' => 'img/texas.jpg',
]);
Product::insert([
'name' => 'Madrid',
'precio' => '1000',
'detail' => 'Cuero Nude, Trenza de algodón, Cadena',
'img' => 'img/madrid.jpg',
]); }
}
