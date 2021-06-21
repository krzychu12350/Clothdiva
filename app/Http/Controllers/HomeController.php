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
        $all_registred_users = DB::table('ushop')->count();
        return view('backend.overview', compact('all_registred_users'));
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

        $user_orders = DB::table('orders o')
        ->join('ushop u', 'u.id_ushop', '=', 'o.id_ushop')
        ->join('products pr', 'pr.id_order', '=', 'o.id_order')
        ->where('u.id_ushop', '=', $id)
        ->get();
     
  
        return view('frontend.user-dashboard',compact('user_data','user_orders'));
    }
  
}
