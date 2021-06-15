<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Models\Product;
use DB;
use Session;

class ShopcartController extends Controller
{
    public function index()
    {
        
        return view('frontend.shopcart');
       
    }

    public function addToCart($id, Request $request)
    {
      
        $quantity_of_product = $request->input('quantity');
        
        $product = Product::find($id);
        $int = (int)$id;

        $image = DB::table('images i')
        ->join('products p', 'i.id_product', '=', $int)
        ->select('image')
        ->take(1)
        ->get();
        $plucked = $image->pluck('image');
        $plucked->all();
     
        //dd($plucked[0]);
        

        if(!$product) {
            abort(404);
        }
        $cart = session()->get('cart');
        // if cart is empty then this the first product
        if(!$cart) {
            $cart = [
                    $id => [
                        "id_product" => $product->id_product,
                        "name" => $product->name,
                        "image" => $plucked[0],
                        "size_of_product" => $product->size_of_product,
                        "quantity" => $quantity_of_product,
                        "prize" => $product->prize,
                    ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('status', 'Product added to cart successfully!');
        }
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
            $cart[$id]['quantity'] += $quantity_of_product;
            session()->put('cart', $cart);
            return redirect()->back()->with('status', 'Product added to cart successfully!');
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "id_product" => $product->id_product,
            "name" => $product->name,
            "image" => $plucked[0],
            "size_of_product" => $product->size_of_product,
            "quantity" => $quantity_of_product,
            "prize" => $product->prize,
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('status', 'Product added to cart successfully!');
    }

    public function updatefromCart(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('status', 'Cart updated successfully');
        }
    }

    public function removefromCart(Request $request)
    {
        
        if($request->id) {
            $cart = session()->get('cart');
           
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('status', 'Product removed successfully');
        }
        
    }
    
   
    
}
