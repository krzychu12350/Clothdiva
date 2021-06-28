<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class SearchEngineController extends Controller
{
     /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    public function paginate($items, $perPage = 6, $page = null, $options = [])

    {

        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
         
        
        $items = $items instanceof Collection ? $items : Collection::make($items);

        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);

    }

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

        $products_from_search2 = DB::select("select products_searched('$search_query') as products_searched from images FETCH FIRST 1 ROWS ONLY");
        $products_from_search = $this->paginate($products_from_search2);
        $products_from_search->setPath('search')->appends([ 'search-input' => $search_query ]);

        return view('frontend.searchedproducts', compact('products_from_search'));
    }

}
