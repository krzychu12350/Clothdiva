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
}
