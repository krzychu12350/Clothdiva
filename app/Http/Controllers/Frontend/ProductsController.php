<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Sub_category;
use App\Models\Product;
use DB;

class ProductsController extends Controller
{
    public function showProducts(Request $request)
    {
        //try{
        //$products_selection = DB::select("select products_selection() as products_selection from products FETCH FIRST 1 ROWS ONLY");
        // $category = Category::where('name_of_category', $type)->first();
        // $subcategory = Sub_category::where('id_category', $category->id)->first();
        /*
         $favourite_products = DB::table('products')
            ->join('favorite_products', 'favorite_products.id_product', '=', 'products.id_product')
            ->select('products.id_product', 'products.name', 'products.prize')
            ->where('favorite_products.id_ushop', '=', $id)
            ->get();

           SELECT * FROM products p
            INNER JOIN sub_categories sb ON sb.id_sub_category = p.id_sub_category 
            INNER JOIN categories c ON c.id_category = sb.id_category 
            INNER JOIN images i ON i.id_product = p.id_product
            WHERE sb.name_of_subcategory='Shorts' AND c.name_of_category='Women';
             */
        $category = $request->input('type');
        $subcategory = $request->input('subcategory');

        $products_selection = DB::table('products p as products_selection')
        ->join('sub_categories sb', 'sb.id_sub_category', '=', 'p.id_sub_category')
        ->join('categories c', 'c.id_category', '=', 'sb.id_category')
        ->join('images i', 'i.id_product', '=', 'p.id_product')
        ->where('sb.name_of_subcategory', '=', 'Shorts')
        ->where('c.name_of_category', '=',  'Women')
        ->select('p.id_product', 'p.name', 'p.prize', 'i.image')
        ->get();
        
        //dd($subcategory->products);
        return view('frontend.shop', compact('products_selection'));
        //return view('frontend.shop');
        //return view('frontend.shop', ['products_selection' => $products_selection]);
        /*
        }
        catch(Exception $e){
            //return view('frontend.firstlookpage');
            report($e);
        }*/
    }
}
