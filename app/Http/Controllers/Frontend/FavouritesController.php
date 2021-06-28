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
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    
    public function index()
    {
    
     
        /*$favourite_products = DB::table('products')
            ->join('favorite_products', 'favorite_products.id_product', '=', 'products.id_product')
            ->select('products.id_product', 'products.name', 'products.prize','products.size_of_product')
            ->where('favorite_products.id_ushop', '=', $id)
            ->get();
        
        $favourite_products =  DB::table('images i')
        ->leftJoin('products p', 'p.id_product', '=', 'i.id_product')
        ->join('favorite_products fp', 'fp.id_product', '=', 'p.id_product')
        ->select('MIN(i.image) as image_src', ' p.id_product', 'p.name','p.prize', 'p.size_of_product')
        ->where('fp.id_ushop', '=', $id)
        ->groupBy('p.id_product', 'p.name','p.prize','p.size_of_product')
        ->get();  */
        $id = Auth::user()->id_ushop;
        $favourite_products = DB::select("select fav_products('$id') as fav_products from images FETCH FIRST 1 ROWS ONLY");
        
        return view('frontend.favourites',['favourite_products'=>$favourite_products]);
    }
 
    public function delFavouriteProduct(Request $request) 
    {
        $product_id = $request->input('id');

        //print($id);
       // echo $id;
        $procedureName = 'system.del_fav_products';
        //$id = Sentry::getUser()->id
        //execute add_fav_products(2, 29);
        $id = Auth::user()->id_ushop;
        $bindings = [
            'id_user'  => $id,
            //'id_product'  => 34,
            'id_product'  => $product_id,
        ];
            
        $result = DB::executeProcedure($procedureName, $bindings);
        //dd($result);
        return redirect()->route('favourites')->with('status', 'Products has been delete from favourite products!');
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
        $id = Auth::user()->id_ushop;
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
