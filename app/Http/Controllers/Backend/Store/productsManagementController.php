<?php

namespace App\Http\Controllers\Backend\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class productsManagementController extends Controller
{
    public function index()
    {
        return view('backend.store.productsManagement');
       
    }
}
