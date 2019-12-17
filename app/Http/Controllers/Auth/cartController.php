<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
//Aquí agrego los modelos de usuarios, productos y carrito
use Auth;
use App\Product;
use App\Cart;
class CartController extends Controller
{
   //Este método muestra todos los productos del carrito del usuario logueado
   public function index()
   {
     $cart = Cart::all();
     return view('carrito')->with('cart', $cart);
   }
   //Este corresponde al que permite agregar al carrito
   public function store($id)
   {//dd($id);
       $product = Product::find($id);
       //dd($product);//Esto lo hago la lograr generar un numero de carrito de forma dinámica
       $item = new Cart;
       $item->name = $product->name;
       $item->description = $product->detail;
       $item->price = $product->precio;
       $item->featured_img = $product->img;
       $item->cant = 1;
       $item->user_id = Auth::user()->id;
       //Este lo cree para controlar si el producto fue comprado (1) o aun no ha sido producto no comprado (0).
       $item->status = 0;
       $item->cart_number=0;
       //Aquí guardo en la tabla de cart (carrito)
       //dd($item);
       $item->save();

       return redirect('home');
   }
   //Aquí traigo todos los productos del carrito del usuario logueado y que ha seleccionado una vez que decide cerrar la compra.
   public function cartclose(Request $req){
     $items = Cart::where("user_id", Auth::user()->id)->where("status",0)->get();
     //De esta forma genero el número del carrito para el usuario que está comprando

     $cart_number = Cart::max('cart_number') +1;
     foreach($items as $item){
       $item->status = 1;
       $item->cart_number = $cart_number;
       $item->save();
     }
     return redirect('home');
   }
   //Con este método controlo todo lo que el usuario historicamente ha comprado
   public function history(){
     $carts = Cart::where('user_id', Auth::user()->id)
                   ->where("status",1)->get()
                   ->groupBy('cart_number');
                   //De esta forma controlo todos los nros de carrito del usuario.
     return view('history', compact('carts'));
   }
   
}
