<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductosController extends Controller
{
  public function index()
  {
    $products=Product::all();
    return view('productos', compact('products'));
  }

}
