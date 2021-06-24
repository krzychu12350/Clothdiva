<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }
    */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $banner_image = DB::table('banner_images')->get();
        //dd($banner_image);
        return view('frontend.firstlookpage', compact('banner_image'));
    }
        /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function adminHome()
    {
        //$date_of_placing_order = DB::table('orders')->groupBy('date_of_placing_order')->sum('order_value');
     
        $totals = DB::select( DB::raw("SELECT SUM(order_value) as total_earinings from orders group by TO_CHAR(TO_DATE(substr(date_of_placing_order,6,2), 'MM'), 'Month')") );
        $array_totals= [];
        foreach ($totals as $single) {
            array_push($array_totals, $single->total_earinings);
        }
       
        $months = DB::select( DB::raw("SELECT  TO_CHAR(TO_DATE(substr(date_of_placing_order,6,2), 'MM'), 'Month') as month from orders group by TO_CHAR(TO_DATE(substr(date_of_placing_order,6,2), 'MM'), 'Month')") );
        $array_months= [];
        foreach ($months as $single) {
            array_push($array_months, $single->month);
        }


        $all_registred_users = DB::table('ushop')->count();
      
        $all_registred_users_by_month = DB::select(DB::raw("SELECT COUNT(*) as all_users, TO_CHAR(TO_DATE(substr(created_at,4,3), 'MON'), 'Month')as month 
        from ushop group by TO_CHAR(TO_DATE(substr(created_at,4,3), 'MON'), 'Month')"));

        dd($all_registred_users_by_month);

        $all_products = DB::table('products')->count();
        $total_earnings = DB::table('orders')->sum('order_value');
        $all_orders = DB::table('orders')->count();
        return view('backend.overview', compact('all_registred_users','all_products','all_orders','total_earnings','array_totals','array_months'));
    }

    public function privacyPolicy()
    {
        return view('frontend.privacy');
    }
    public function faq()
    {
        return view('frontend.faq');
    }
    public function about()
    {
        return view('frontend.about-us');
    }
    public function showDashboard()
    {
        $id = Auth::user()->id_ushop;

        $user_data = DB::table('ushop u')
        ->leftJoin('user_addresses ua', 'ua.id_user_address', '=', 'u.id_user_address')
        ->where('u.id_ushop', '=', $id)
        ->get();

        $user_data_addr = DB::table('user_addresses ua')
        ->join('ushop u', 'ua.id_user_address', '=', 'u.id_user_address')
        ->where('u.id_ushop', '=', $id)
        ->get();
        
        $user_orders = DB::table('orders o')
        ->join('ushop u', 'u.id_ushop', '=', 'o.id_ushop')
        ->join('orders_products po', 'po.id_order', '=', 'o.id_order')
        //->join('products pr', 'pr.id_product', '=', 'po.id_product')
        ->where('u.id_ushop', '=', $id)
        ->select('o.*')
        ->distinct()->get();
        
        $order_products =  DB::select(DB::raw("SELECT pr.*, po.quantity as quantity_order FROM orders
        INNER JOIN orders_products po ON po.id_order = orders.id_order 
        INNER JOIN products pr ON pr.id_product = po.id_product 
        INNER JOIN ushop ON ushop.id_ushop = orders.id_ushop
        WHERE ushop.id_ushop = '$id'
        "));
     
       //dd($order_products);
        return view('frontend.user-dashboard',compact('user_data','user_orders','user_data_addr','order_products'));
    }
  
}
