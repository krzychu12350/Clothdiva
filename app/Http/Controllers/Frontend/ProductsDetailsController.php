<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Image;
use DB;

class ProductsDetailsController extends Controller
{
    public function index()
    {
        return view('frontend.productdetails');
    }
    
    function details($id){
        $data1 = Product::find($id);
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


        //dd($data2);
        return view('frontend.productdetails',['product'=>$data1, 'images'=>$data2]);
    }
}
