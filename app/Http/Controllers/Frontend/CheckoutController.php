<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('frontend.checkout');
    }

    public function placeOrder(Request $request)
    {   
        //$name = $request->input('email');
        //dd($request);

        $this->validate($request,[
            'fname' => 'required|max:255',
            'lname' => 'required',
            'phone' => 'required',
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'country' => 'required',
            'street' => 'required',
            'apartment-number' => 'required|max:255',
            'postcode' => 'required',
            'city' => 'required',
            'country' => 'required',
        ]);
                    /*
        Mail::send('email', [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
                                                ],
            function ($message) {
                    $message->from('clothdivaoffice@gmail.com');
                    $message->to('krzychu12350@interia.pl')
                    ->subject('Order summary');
    });*/

    //return back()->with('status', 'Thanks for contacting me, I will get back to you soon!');
    return back();
    }
}
