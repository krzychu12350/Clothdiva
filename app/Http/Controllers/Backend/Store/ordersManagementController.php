<?php

namespace App\Http\Controllers\Backend\Store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ordersManagementController extends Controller
{   
   
    public function index()
    {
        //$status = DB::table('orders')->distinct()->get(['status']);
        $status = DB::select('SELECT DISTINCT ROW_NUMBER() OVER( ORDER BY status asc) as ID , status from orders group by status');
        //dd($status);

        $orders =  DB::select("select orders_CRUD.red_orders() as orders_management from orders FETCH FIRST 1 ROWS ONLY");
     
        $order_products =  DB::select(DB::raw("SELECT pr.id_product, pr.name, po.quantity as quantity_order, orders.id_order FROM orders
        INNER JOIN orders_products po ON po.id_order = orders.id_order 
        INNER JOIN products pr ON pr.id_product = po.id_product 
        INNER JOIN ushop ON ushop.id_ushop = orders.id_ushop"));

        $order_products2 =  DB::select(DB::raw("SELECT po.quantity as quantity_order FROM orders
        INNER JOIN orders_products po ON po.id_order = orders.id_order 
        INNER JOIN products pr ON pr.id_product = po.id_product 
        INNER JOIN ushop ON ushop.id_ushop = orders.id_ushop
        "));

         $top_order_id = DB::select(DB::raw("SELECT orders.id_order FROM orders
         INNER JOIN orders_products po ON po.id_order = orders.id_order 
         INNER JOIN products pr ON pr.id_product = po.id_product 
         INNER JOIN ushop ON ushop.id_ushop = orders.id_ushop
         GROUP BY pr.name, pr.prize, pr.color, pr.size_of_product, po.quantity, orders.id_order
         ORDER BY orders.id_order ASC FETCH FIRST 1 ROWS ONLY"));
         
        
       
     
        

    /*
        $order_products = DB::table('orders o')
           // ->join('orders_products po', 'po.id_order', '=', 'o.id_order ')
            ->join('products pr', 'pr.id_product', '=', 'po.id_product')
            ->join('ushop u', 'u.id_ushop', '=', 'o.id_ushop')
            ->select('pr.name')
            ->get();*/

        
       
        return view('backend.store.ordersManagement', compact('orders','status','order_products','order_products2','top_order_id'));
       
    }

    public function create(Request $request)
    {   
        dd($request);   
    }

    public function update(Request $request)
    {   
     
        $id_order = $request->input('order-id');
        $sel_status = $request->input('selectOption');

        $procedureName = 'orders_CRUD.upd_order';
        
        $bindings = [
            'sel_status'  => $sel_status,
            'id_order'  =>  $id_order,
        ];
            
        $result = DB::executeProcedure($procedureName, $bindings);
        
        return redirect()->back()->with('status', 'Order has been updated!');

    }
    public function destroy(Request $request)
    {   

        $id_order = $request->input('id_o');
        //dd($id_order);  
        $procedureName = 'orders_CRUD.del_order';
        
        $bindings = [
            'id_order'  =>  $id_order,
        ];
            
        $result = DB::executeProcedure($procedureName, $bindings);
        
        return redirect()->back()->with('status', 'Order has been removed!');
   
    }

}
