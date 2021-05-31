<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Sentry;

class FavouritesController extends Controller
{
    public function index()
    {
        $favourite_products = DB::table('products')
            ->join('favorite_products', 'favorite_products.id_product', '=', 'products.id_product')
            ->join('favorite_products', 'favorite_products.id_user', '=', 'users.id_user')
            ->select('products.id_product', 'products.name', 'products.prize')
            ->get();
        
        
            return view('frontend.favourites');
    }
    public function addFavouriteProduct(Request $request)
    {
        /*
        $products = Product::query()
        ->where('quantity', '>', 0)
        ->with(['favorite' => function ($hasMany) {
            $hasMany->where('user_id', \Auth::user()->id);
        }])
        ->get();*/

       // $users = User::all();
        //$id = Auth::id();
        //return view('frontend.favourites')->with('user', $user);
        //session->id;
    
        $product_id = $request->input('id');

        //print($id);
       // echo $id;
        $procedureName = 'system.add_fav_products';
        //$id = Sentry::getUser()->id
        //execute add_fav_products(2, 29);
        $id = Auth::user()->id_user;
        $bindings = [
            'id_user'  => $id,
            //'id_product'  => 34,
            'id_product'  => $product_id,
        ];
            
        $result = DB::executeProcedure($procedureName, $bindings);
        //dd($result);
        return redirect()->route('favourites')->with('status', 'Products has been added to favourite products!');
        //return redirect()->to('/favorites');
    }
       // return redirect()->route('frontend.favourites')->with('success', 'Product has been added to favorite products');

    
}
