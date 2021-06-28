<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use DateTime;
use Carbon\Carbon;

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
        $this->middleware(['auth','verified']);
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
        
        $total_earnings = DB::table('orders')->sum('order_value');
        $total_earnings_by_months = DB::select( DB::raw("SELECT SUM(order_value) as total_earinings, TO_CHAR(TO_DATE(substr(date_of_placing_order,4,2), 'MM'), 'Month') as month from orders WHERE substr(date_of_placing_order,7,4) = EXTRACT(YEAR FROM sysdate) group by substr(date_of_placing_order,4,2) order by substr(date_of_placing_order,4,2) ASC") );
        $array_totals= [];
        $array_months= [];
        foreach ($total_earnings_by_months as $single) {
            array_push($array_totals, $single->total_earinings);
            array_push($array_months, $single->month);
        }
       
        DB::setDateFormat('DD/MM/YYYY');
        $currentYear =  Carbon::now()->format('Y');
        
        $all_registred_users_by_month = DB::select( DB::raw("SELECT COUNT(*) as all_users, substr(created_at,4,2) as month from ushop group by substr(created_at,4,2) order by substr(created_at,4,2) ASC"));
        //where TO_CHAR(CONCAT(20,substr(created_at,8,2)))='2021'
   
        foreach ($all_registred_users_by_month as $single) {
            $dateObj   = DateTime::createFromFormat('!m', $single->month);
            $monthName = $dateObj->format('F');
            $single->month = $monthName;
        }

    
        $all_registred_users = DB::table('ushop')->count();
        $array_months_users= [];
        $array_number_of_users = [];
        foreach ($all_registred_users_by_month as $single) {
            array_push($array_number_of_users, $single->all_users);
            array_push($array_months_users, $single->month);
        }

        $all_orders = DB::table('orders')->count();
        $all_orders_by_month = DB::select("SELECT COUNT(*) as all_orders, TO_CHAR(TO_DATE(substr(date_of_placing_order,4,2), 'MM'), 'Month') as month FROM orders WHERE substr(date_of_placing_order,7,4) = EXTRACT(YEAR FROM sysdate) GROUP BY substr(date_of_placing_order,4,2) ORDER BY substr(date_of_placing_order,4,2) ASC");
        $array_months_orders= [];
        $array_number_of_orders = [];
        foreach ($all_orders_by_month as $single) {
            array_push($array_months_orders, $single->month);
            array_push($array_number_of_orders, $single->all_orders);
        }

        $all_products = DB::table('products')->count();
        $all_products_by_months = DB::select("SELECT COUNT(*) as all_products, TO_CHAR(TO_DATE(substr(created_at,4,2), 'MM'), 'Month') as month from products group by substr(created_at,4,2) order by substr(created_at,4,2) ASC");
         //WHERE substr(created_at ,8,2) = substr(extract(year from sysdate),3,2)
        $array_months_products= [];
        $array_number_of_products = [];
        foreach ($all_products_by_months as $single) {
            array_push($array_months_products, $single->month);
            array_push($array_number_of_products, $single->all_products);
        }
    



        return view('backend.overview', compact('all_registred_users','all_products','all_orders','total_earnings','array_totals','array_months','array_months_users','array_number_of_users','array_months_orders','array_number_of_orders','array_months_products','array_number_of_products'));
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
        /*
        $order_products =  DB::select(DB::raw("SELECT pr.*, po.quantity as quantity_order FROM orders
        INNER JOIN orders_products po ON po.id_order = orders.id_order 
        INNER JOIN products pr ON pr.id_product = po.id_product 
        INNER JOIN ushop ON ushop.id_ushop = orders.id_ushop
        WHERE ushop.id_ushop = '$id'
        "));*/
        $order_products =  DB::select(DB::raw("SELECT pr.name, pr.prize, pr.color, pr.size_of_product, po.quantity as quantity_order, orders.id_order FROM orders
        INNER JOIN orders_products po ON po.id_order = orders.id_order 
        INNER JOIN products pr ON pr.id_product = po.id_product 
        INNER JOIN ushop ON ushop.id_ushop = orders.id_ushop
        WHERE ushop.id_ushop = 2
        GROUP BY pr.name, pr.prize, pr.color, pr.size_of_product, po.quantity, orders.id_order
        ORDER BY orders.id_order ASC"));

        $top_order_id = DB::select(DB::raw("SELECT orders.id_order FROM orders
        INNER JOIN orders_products po ON po.id_order = orders.id_order 
        INNER JOIN products pr ON pr.id_product = po.id_product 
        INNER JOIN ushop ON ushop.id_ushop = orders.id_ushop
        WHERE ushop.id_ushop = '$id'
        GROUP BY pr.name, pr.prize, pr.color, pr.size_of_product, po.quantity, orders.id_order
        ORDER BY orders.id_order ASC FETCH FIRST 1 ROWS ONLY"));
     
       //dd($order_products);
        return view('frontend.user-dashboard',compact('user_data','user_orders','user_data_addr','order_products','top_order_id'));
    }
  
}
