<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Sub_category;
use App\Models\Product;

class ProductsController extends Controller
{
    public function showProducts(Request $request, $type)
    {
        try{
        $category = Category::where('name_of_category', $type)->first();
        $subcategory = Sub_category::where('id_category', $category->id)->first();
        dd($subcategory->products);
        return view('frontend.shop', compact('subcategory'));
        }
        catch(Exception $e){
            return view('frontend.firstlookpage');
        }
    }
}
