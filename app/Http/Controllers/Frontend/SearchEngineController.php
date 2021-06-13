<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class SearchEngineController extends Controller
{
    public function searchProducts(Request $request)
    {
        $search_query = $request->input('search-input');
        //dd($search_query);
        //$search_query = "sh";
        /*
        $products_from_search = DB::table('images i')
                ->where('p.name', 'like', '%sh%')
                ->leftJoin('products p', 'p.id_product', '=', 'i.id_product','p.name','p.prize','p.size_of_product')
                ->select('p.id_product','p.name','p.prize','p.size_of_product')
                //->min('i.image as image_src')
                ->groupBy('p.id_product','p.name','p.prize','p.size_of_product');
     
        
        $sql = "SELECT MIN(i.image) as image_src,  p.id_product, p.name, p.prize, p.size_of_product from images i
        left join products p on p.id_product = i.id_product
        WHERE p.name LIKE '%sh%'
        group by p.id_product, p.name, p.prize, p.size_of_product;";
     
        $products_from_search = DB::query(DB::raw($sql));
        */

        $products_from_search = DB::select("select products_searched('$search_query') as products_searched from images FETCH FIRST 1 ROWS ONLY");
        //dd($products_from_search);
        return view('frontend.searchedproducts', compact('products_from_search'));
    }

}
