<?php

namespace App\Http\Controllers\Frontend;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        return view('frontend.shop');
    }
    public function showProductsbySize(Request $request)
    {

        $category = Session::get('category');
        $subcategory = Session::get('subcategory');

        $size = $request->input('size_p');

    
        //$products_shop_view = DB::select("select products_shop_view_by_size('$subcategory','$category', '$size') as products_shop_view from images FETCH FIRST 1 ROWS ONLY");

        return view('frontend.shop');
    }
}
