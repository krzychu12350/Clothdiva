<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ContactMail;
use Mail;

class ContactUsMailController extends Controller
{
   // Store Contact Form data
   public function ContactUsForm(Request $request) {

    // Form validation
    $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'subject'=>'required',
        'message' => 'required'
     ]);

    //  Store data in database
    ContactMail::create($request->all());

    //  Send mail to admin
    Mail::send('mail', array(
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'subject' => $request->get('subject'),
        'user_query' => $request->get('message'),
    ), function($message) use ($request){
        $message->from($request->email);
        $message->to('clothdivaoffice@gmail.com', 'Admin')->subject($request->get('subject'));
    });

    return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
}
}
