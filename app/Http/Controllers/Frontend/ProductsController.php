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
    public function showProducts(Request $request, $type)
    {
        //try{
        $products_selection = DB::select("select products_selection() as products_selection from products FETCH FIRST 1 ROWS ONLY");
        #$category = Category::where('name_of_category', $type)->first();
        #$subcategory = Sub_category::where('id_category', $category->id)->first();
        #dd($subcategory->products);
        ##return view('frontend.shop', compact('subcategory'));
        return view('frontend.shop', ['products_selection' => $products_selection]);
        /*
        }
        catch(Exception $e){
            return view('frontend.firstlookpage');
        }*/
    }
}
