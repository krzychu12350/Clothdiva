<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Image;
use DB;
use Session;

class ProductsDetailsController extends Controller
{
    public function index()
    {
        return view('frontend.productdetails');
    }
    
    function details($id){
        $data1 = Product::find($id);

        //$category = Session::get('category');

        $category = DB::table('products pr')
        ->join('sub_categories sb', 'sb.id_sub_category', '=', 'pr.id_sub_category')
        ->join('categories c', 'c.id_category', '=', 'sb.id_category')
        ->select('c.name_of_category')
        ->where('pr.id_product', '=', $id)
        ->get();
        $category_name = $category->pluck('name_of_category');
        $category_name->all();

        //$data2 = Image::where("id_product", $id);
       /*
       $data = DB::table('products')
            ->join('images', 'images.id_product', '=', 'products.id_product')
            ->select('*')
            ->where('products.id_product', '=', $id)
            ->get();
        $data->toArray();*/

         $data2 = DB::table('images')
            ->join('products', 'products.id_product', '=', 'images.id_product')
            ->where('images.id_product', '=', $id)
            ->select('images.image')
            ->get();


        //dd($id);
        return view('frontend.productdetails',['product'=>$data1, 'images'=>$data2, 'category_name' => $category_name[0]]);
    }
}
