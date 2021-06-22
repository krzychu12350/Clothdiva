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
        return view('backend.store.ordersManagement', compact('orders','status'));
       
    }

    public function create(Request $request)
    {   
        dd($request);   
    }

    public function update(Request $request)
    {   
        //dd($request->all());  
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
        
        return redirect()->back()->with('status', 'User has been removed!');
   
    }

}
