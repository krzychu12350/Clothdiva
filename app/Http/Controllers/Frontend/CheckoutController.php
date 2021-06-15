<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use Auth;
use App\Models\User;
use App\Models\Product;
use DB;

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

    }
    
    Mail::send('checkout_mail', ['user' => $user, 'cart' => $cart], function ($m) use ($user) {
        $m->from('clothdivaoffice@gmail.com', 'Clothdiva');
        $m->to($user->email, $user->name)->subject('Summary Order');
    });

   /*
    $beautymail = app()->make(Snowfire\Beautymail\Beautymail::class);
	$beautymail->send('checkout_mail', ['cart' => $cart], function($message)
	{
		$message
			->from('clothdiva@gmail.com')
			->to('krzychu12350@interia.pl', 'Krzysztof')
			->subject('Summary Order');
	});
*/

    //$name => $request->get('fname');
    //$email => $request->get('email');
    /*
    $name = $request->input('fname');
    $email = $request->input('email');
    $data = array('name'=>$name);

    Mail::send('checkout_mail', $data, function($message) {
       $message->to('krzychu12350@interia.pl', 'Order summary')->subject
          ('Test orders summary mail');

       //$message->attach('C:\laravel-master\laravel\public\uploads\image.png');
       //$message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
       $message->from('clothdivaoffice@gmail.com','Clothdiva');
    });*/
    
    session()->forget('cart');

    return redirect()->route('home')->with('status', 'Thank you for shopping with us! We recommend ourselves for the future!');
    }
}
