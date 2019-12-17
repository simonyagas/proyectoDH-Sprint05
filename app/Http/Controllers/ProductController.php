<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // $request->user()->authorizeRoles(['admin']);

        $products = Product::latest()->paginate(5);
        //dd($products);
        return view('products.index',compact('products'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'precio' => 'required',
            'detail' => 'required',
            'img'=> 'required'

        ]);

        $product = new Product($request->all());

        $imagen = $request->file('img');

        if ($imagen) {
            $imagenF = uniqid("img-") . "." . $imagen->extension();
            $imagen->storePubliclyAs("public/img", $imagenF);
            $product->img = $imagenF;
        }
        $product->save();

        return redirect()->route('products.index')
                        ->with('genial!','Producto.');
    }

    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'precio' => 'required',
            'detail' => 'required',
            'img' => 'required',

        ]);
        $product->update($request->all());

        $imagen = $request->file('img');

        if ($imagen) {
            $imagenF = uniqid("img-") . "." . $imagen->extension();
            $imagen->storePubliclyAs("public/img", $imagenF);
            $product->img = $imagenF;
        }
        $product->save();

        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}


  //  public function addCarrito($id){
    //$productoCarrito = product::find($id);
    //dd($peliculaFavorita['title']);
    //$misProductos = [
      // 'id' => $productoCarrito['id'],
      // 'name' => $productoCarrito['name'],
       //'detail' => $productoCarrito['detail'],
      // 'img' => $productoCarrito['img']
    //];
    //session()->put('compras.'.$id,$misProductos);
    //return view('carrito');

//}
//Método para mostrar las peliculas favoritas seleccionadas - Simulo mostrar el carrito - tal como lo indico Ramiro
//public function showCarrito(){
  //  return view('carrito');
//}

//Método para remover una pelóicula de mi lista de favoritas
//public function removeCarrito($id){
    //session()->pull('compras.'.$id,'default');
    //return view('carrito');
//}
