<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use Auth;
use App\Models\User;
use App\Models\Product;
use DB;
use Carbon\Carbon;
use Dompdf\Dompdf;
use Dompdf\Options;
use PDF;

class CheckoutController extends Controller
{
    public function index()
    {
       

        $user_id = Auth::user()->id_ushop;
    
        $user_data = DB::table('ushop u')
        ->leftJoin('user_addresses ua', 'ua.id_user_address', '=', 'u.id_user_address')
        ->where('u.id_ushop', '=',  $user_id)
        ->get();

        return view('frontend.checkout', compact('user_data'));
    }

    public function placeOrder(Request $request)
    {   
        //dd($request->input('method'));
        //$radio = $request->get('method');
        //dd($radio);
        //$email = $request->input('email');
        //dd($request->input('email'));
       /*
        $this->validate($request,[
            'fname' => 'required|max:255|regex:/(^([a-zA-Z]+)(\d+)?$)/u',
            'lname' => 'required|regex:/(^([a-zA-Z]+)(\d+)?$)/u',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'country' => 'required',
            'street' => 'required',
            'apartment_number' => 'required|max:255',
            'postcode' => 'required|regex:/\b\d{5}\b/',
            'city' => 'required|max:255',
            'country' => 'required|max:255',
        ]);
        
        Mail::send('email', [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
                                                ],
            function ($message) {
                    $message->from('clothdivaoffice@gmail.com');
                    $message->to('krzychu12350@interia.pl')
                    ->subject('Order summary');
    });*/

   
    $id = Auth::user()->id_ushop;
    $user = User::findOrFail($id);
    //dd($user);
    $cart = session()->get('cart');
    //dd($cart);

    $total = 0;

    foreach($cart as $product){
        //$data1 = Product::find($id);
        //dd($product['quantity']);
        //dd($product['id_product']);
        $idprod = $product['id_product'];
        $quan = $product['quantity'];
        
        $procedureName = 'system.update_prod_quantity';
    
        $bindings = [
            'quan'    =>  $quan,
            'idprod'  =>  $idprod,
        ];
            
        $result = DB::executeProcedure($procedureName, $bindings);
        $total += $product['prize'] * $product['quantity'];
    }
    //dd($total);

    $todayDate = date(Carbon::now()->format('d/m/Y'));
    DB::setDateFormat('DD/MM/YYYY');
    DB::table('orders')->insert([
        'status' => 'Accepted',
        'date_of_placing_order' => $todayDate,
        'payment_method' => $request->input('method'),
        'order_value' => number_format((float) 1.03 * $total, 2, '.', ''),
        'id_ushop' =>  $id,
    ]);

    $last_order_id = DB::table('orders')
    ->select('id_order')
    ->latest('id_order')->first();

    //dd($last_order_id->id_order);

   foreach($cart as $product){
        //$data1 = Product::find($id);
        //dd($product['quantity']);
        //dd($product['id_product']);
        $idprod = $product['id_product'];
        $quantity = $product['quantity'];
        DB::table('orders_products')->insert([
            'id_order' => $last_order_id->id_order,
            'id_product' => $idprod,
            'quantity' => $quantity,
        ]);

    }

    //$data_pdf["name"] = $request->input('fname');

    $data = [
        'fname' => $request->input('fname'),
        'lname' => $request->input('lname'),
        'phone' => $request->input('phone'),
        'email' => $request->input('email'),
        'country' => $request->input('country'),
        'street' => $request->input('street'),
        'apartment_number' => $request->input('apartment_number'),
        'postcode' => $request->input('postcode'),
        'city' => $request->input('city'),
        'country' => $request->input('country'),
    ];
 


 
    $path = base_path('logo.png');
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data_logo = file_get_contents($path);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data_logo);

    $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadview('invoice', compact('base64','cart', 'data'));
    $pdf->setPaper('A4','portrait');
    $pdf->stream();
 

    Mail::send('checkout_mail', ['data' => $data, 'user' => $user, 'cart' => $cart], function ($m) use ($user, $data, $pdf) {
        $m->from('clothdivaoffice@gmail.com', 'Clothdiva');
        $m->to($data['email'], $user->name)->subject('Summary Order')->attachData($pdf->output(), "invoice.pdf");
    });

    session()->forget('cart');

    return redirect()->route('home')->with('status', 'Thank you for shopping with us! We recommend ourselves for the future!');
    }
}
