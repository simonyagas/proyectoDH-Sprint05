<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
class ProductosController extends Controller
{
  public function index()
  {
    $productos = Producto::All();
      return view('productos')->with("productos",$productos);
  }
}
