<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Sub_category;
use App\Models\Product;
use DB;
use Session;

class ProductsController extends Controller
{
    public function showProducts(Request $request)
    {
        //try{
        //$products_selection = DB::select("select products_selection() as products_selection from products FETCH FIRST 1 ROWS ONLY");
        //$category = Category::where('name_of_category', $type)->first();
        //$subcategory = Sub_category::where('id_category', $category->id)->first();

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
        //$category = $request->input('type');
         //$subcategory = $request->input('subcategory');
     
        //$cos = Request::input('type');
        //var_dump($cos);
       // var_dump($subcategory);
      // $url = explode("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");

       //var_dump($url[3]);
       // $allParams = $request->all();
        //var_dump($allParams);
          /*
        foreach ($allParams as $key => $value) {

            var_dump($value);   
        }*/
 
        // $allparams is an associative array, you can also read individual element as $allparams['model']
   
        
        $url = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        $category = $url[2];
        $subcategory = $_GET['subcategory'];
        Session::put('category', $category);
        Session::put('subcategory', $subcategory);

        //dd($subcategory);
        //$category = $request->input('type');
         //$subcategory = $request->input('subcategory');
        /*
        $products_selection = DB::table('products p as products_selection')
        ->join('sub_categories sb', 'sb.id_sub_category', '=', 'p.id_sub_category')
        ->join('categories c', 'c.id_category', '=', 'sb.id_category')
        ->where('sb.name_of_subcategory', '=', $subcategory)
        ->where('c.name_of_category', '=',  $category)
        ->select('p.id_product', 'p.name', 'p.prize', 'p.size_of_product')
        ->get();
    
        $products_selection = DB::table('products p as products_selection')
        ->join('sub_categories sb', 'sb.id_sub_category', '=', 'p.id_sub_category')
        ->join('categories c', 'c.id_category', '=', 'sb.id_category')
        ->where('sb.name_of_subcategory', '=', $subcategory)
        ->where('c.name_of_category', '=',  $category)
        ->select('p.id_product', 'p.name', 'p.prize', 'p.size_of_product')
        ->get();
        */
        $all_sizes = DB::table('products p')->select('p.size_of_product')->distinct()
        ->join('sub_categories sb', 'sb.id_sub_category', '=', 'p.id_sub_category')
        ->join('categories c', 'c.id_category', '=', 'sb.id_category')
        ->where('sb.name_of_subcategory', '=', $subcategory)
        ->where('c.name_of_category', '=',  $category)
        ->orderByRaw('size_of_product DESC')->get();

        $all_colors = DB::table('products p')->select('p.color')->distinct()
        ->join('sub_categories sb', 'sb.id_sub_category', '=', 'p.id_sub_category')
        ->join('categories c', 'c.id_category', '=', 'sb.id_category')
        ->where('sb.name_of_subcategory', '=', $subcategory)
        ->where('c.name_of_category', '=',  $category)
        ->orderByRaw('color DESC')->get();
        /*
  
        $minPrize = DB::table('products p')
        ->join('sub_categories sb', 'sb.id_sub_category', '=', 'p.id_sub_category')
        ->join('categories c', 'c.id_category', '=', 'sb.id_category')
        ->where('sb.name_of_subcategory', '=', $subcategory)
        ->where('c.name_of_category', '=',  $category)
        ->where('p.prize', \DB::raw("(select min(`p.prize`))"))
        ->get();*/

    
        $minPrize = DB::table('products p')
        ->join('sub_categories sb', 'sb.id_sub_category', '=', 'p.id_sub_category')
        ->join('categories c', 'c.id_category', '=', 'sb.id_category')
        ->where('sb.name_of_subcategory', '=', $subcategory)
        ->where('c.name_of_category', '=',  $category)
        ->min('prize');
    
        $maxPrize = DB::table('products p')
        ->join('sub_categories sb', 'sb.id_sub_category', '=', 'p.id_sub_category')
        ->join('categories c', 'c.id_category', '=', 'sb.id_category')
        ->where('sb.name_of_subcategory', '=', $subcategory)
        ->where('c.name_of_category', '=',  $category)
        ->max('prize');

        Session::put('all_sizes', $all_sizes);
        Session::put('all_colors', $all_colors);
        Session::put('minPrize', $minPrize);
        Session::put('maxPrize', $maxPrize);
        
        //$size = "";
        //$sizep = $request->input('sizep');
        //dd($sizep);

        $products_shop_view = DB::select("select products_shop_view('$subcategory','$category','') as products_shop_view from images FETCH FIRST 1 ROWS ONLY");
        
        /*
        $data2 = DB::table('images')
        ->join('products p', 'p.id_product', '=', 'images.id_product')
        ->where('images.id_product', '=', )
        ->select('images.image')
        ->get();
        dd($data2);*/
       
        return view('frontend.shop', compact('products_shop_view','all_sizes','all_colors','minPrize','maxPrize','category','subcategory'));

        /*
        }
        catch(Exception $e){
            //return view('frontend.firstlookpage');
            report($e);
        }*/
    }

    public function showProductsbyPrice(Request $request){
        $category = Session::get('category');
        $subcategory = Session::get('subcategory');

        $all_sizes = Session::get('all_sizes');
        $all_colors = Session::get('all_colors');
        $minPrize = Session::get('minPrize');
        $maxPrize = Session::get('maxPrize');

        $min_price = $request->input('min-amount');
        $max_price = $request->input('max-amount');

        $products_shop_view = DB::select("select products_by_prize('$subcategory', '$category', '$min_price', '$max_price') as products_shop_view from images FETCH FIRST 1 ROWS ONLY");

        return view('frontend.shop', compact('products_shop_view','all_sizes','all_colors','minPrize','maxPrize','category','subcategory'));
    }

    public function showProductsbySize(Request $request){
        $url = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        //$category = $url[2];
        //$subcategory = $url[3];
        $category = Session::get('category');
        $subcategory = Session::get('subcategory');

        //$sizep = $_GET['sizep'];
        $checked = $request->input('checked');
       
        $all_size = implode(', ', $checked);

        ///dd($checked[0],$checked[1]);
        //dd(count($checked));
        dd($all_size);
        $all_sizes = Session::get('all_sizes');
        $all_colors = Session::get('all_colors');
        $minPrize = Session::get('minPrize');
        $maxPrize = Session::get('maxPrize');
    
      
       

        $products_shop_view = DB::select("select products_shop_view('$subcategory', '$category', $all_size) as products_shop_view from images FETCH FIRST 1 ROWS ONLY");
      
     
       //dd($products_shop_view);
        return view('frontend.shop', compact('products_shop_view','all_sizes','all_colors','minPrize','maxPrize','category','subcategory'));
    }

    public function showProductsbyColor(Request $request){
        $url = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        //$category = $url[2];
        //$subcategory = $url[3];
        $category = Session::get('category');
        $subcategory = Session::get('subcategory');

        //$sizep = $_GET['sizep'];
        $checked = $request->input('checked-color');
       

        $checked_colors = implode(', ', $checked);
        dd($checked_colors);
        
        ///dd($checked[0],$checked[1]);
        //dd(count($checked));

        $all_sizes = Session::get('all_sizes');
        $all_colors = Session::get('all_colors');
        $minPrize = Session::get('minPrize');
        $maxPrize = Session::get('maxPrize');
    
      
       

        $products_shop_view = DB::select("select products_shop_view('$subcategory', '$category', $checked_colors) as products_shop_view from images FETCH FIRST 1 ROWS ONLY");
      
     
       //dd($products_shop_view);
        return view('frontend.shop', compact('products_shop_view','all_sizes','all_colors','minPrize','maxPrize','category','subcategory'));
    }
    
}
