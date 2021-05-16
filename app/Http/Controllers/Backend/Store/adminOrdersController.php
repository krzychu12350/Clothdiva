<?php

namespace App\Http\Controllers\Backend\Store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class adminOrdersController extends Controller
{   
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
        return view('backend.store.ordersManagement');
       
    }
}
