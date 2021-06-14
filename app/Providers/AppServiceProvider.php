<?php

namespace App\Providers;
use DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
    
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {        
        //$sub_categories_women = DB::select('select name_of_subcategory from sub_categories where id_category=1');
        //$sub_categories_women = DB::select("select categories_women2() as name_of_subcategory from sub_categories");
        //print_r($sub_categories_women);
        //return $sub_categories_women->value;


        //print_r($sub_categories_women->value); //It is an array print

        //$str_json = json_encode($sub_categories_women); //array to json string conversion
        //echo  $str_json; // printing json string

        //print_r(json_decode($str_json)); //printing array after convert json strinsg to array

        //exit; // exiting further execution to check resutls
   




        //$sub_categories_women = DB::executeFunction('categories_women2');
        //return $sub_categories_women->value;
        /*Prawie dziala
        $pdo = DB::getPdo();
        $stmt = $pdo->prepare("SELECT categories_women2 AS Value FROM sub_categories");
        $stmt->execute();
        $sub_categories_women = $stmt->fetch();*/
        //$result = DB::executeFunction('declare result VARCHAR2(200); categories_women2');

        //$pdo = DB::getPdo();
        //$stmt = $pdo->prepare("SELECT categories_women2 AS Value FROM sub_categories");
        //$result = $stmt->execute();
        //$sub_categories_women =  $result->name_of_subcategory;
        /*
        $id = Auth::user()->id_ushop;

        $favourite_products = DB::table('favorite_products')
        ->select('count(*)')
        ->where('favorite_products.id_ushop', '=', $id)
        ->get();
        */
        $sub_categories_women = DB::select("select subcategories_women() as name_of_subcategory from sub_categories FETCH FIRST 1 ROWS ONLY");
        $sub_categories_men = DB::select("select subcategories_men() as name_of_subcategory from sub_categories FETCH FIRST 1 ROWS ONLY");
        $sub_categories_girls = DB::select("select subcategories_girls() as name_of_subcategory from sub_categories FETCH FIRST 1 ROWS ONLY");
        $sub_categories_boys = DB::select("select subcategories_boys() as name_of_subcategory from sub_categories FETCH FIRST 1 ROWS ONLY");

        $users_data = DB::select("select users_CRUD.red_users() as users_data from ushop FETCH FIRST 1 ROWS ONLY");
        $users_roles = DB::select("select users_roles() as users_roles from roles FETCH FIRST 1 ROWS ONLY");
        $products_management = DB::select("select products_CRUD.red_products() as products_management from products FETCH FIRST 1 ROWS ONLY");

       // $orders_management =  DB::select("select orders_management() as orders_management from products FETCH FIRST 1 ROWS ONLY");

        $scmanagement = DB::select("select subcategories_CRUD.red_subcategories() as scmanagement from sub_categories FETCH FIRST 1 ROWS ONLY");
        $all_categories = DB::select("select all_categories() all_categories from categories FETCH FIRST 1 ROWS ONLY");
        $products_selection = DB::select("select products_selection() as products_selection from products FETCH FIRST 1 ROWS ONLY");

        $promotions_management =  DB::select("select promotion_CRUD.red_promotions() as promotions_management from products FETCH FIRST 1 ROWS ONLY");
     

        view()->share('sub_categories_women',$sub_categories_women);
        view()->share('sub_categories_men',$sub_categories_men);
        view()->share('sub_categories_girls',$sub_categories_girls);
        view()->share('sub_categories_boys',$sub_categories_boys);
        view()->share('scmanagement', $scmanagement);
        view()->share('all_categories', $all_categories);
        view()->share('products_selection', $products_selection);//przekazuje wszystkie produkty z bazy na sklep

        
        view()->share('users_data', $users_data); 
        view()->share('users_roles',  $users_roles); 
        view()->share('products_management', $products_management);
        //view()->share('orders_management', $orders_management);
        view()->share('promotions_management', $promotions_management);
           
     

        
    }
}
