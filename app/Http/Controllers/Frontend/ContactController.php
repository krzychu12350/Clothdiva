<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ContactController extends Controller
{
    public function index()
    {
      
        return view('frontend.contact');
    }
}
