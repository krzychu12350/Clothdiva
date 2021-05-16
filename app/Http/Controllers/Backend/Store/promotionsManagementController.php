<?php

namespace App\Http\Controllers\Backend\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class promotionsManagementController extends Controller
{
    public function index()
    {
        return view('backend.store.promotionsManagement');
       
    }
}
