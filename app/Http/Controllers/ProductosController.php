<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductosController extends Controller
{
  public function index()
  {
    $product=products::all();
    return view('productos', compact('products'));
  }

}
