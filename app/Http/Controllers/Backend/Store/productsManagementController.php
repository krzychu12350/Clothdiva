<?php

namespace App\Http\Controllers\Backend\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class productsManagementController extends Controller
{
    public function index()
    {
        return view('backend.store.productsManagement');
       
    }

    public function destroy(Request $request)
    {   
     
        $id_product = $request->input('id_product');
       // dd($id_promotion);
        $procedureName = 'system.del_product';
        
        $bindings = [
            'id_product'  =>  $id_product,
        ];
            
        $result = DB::executeProcedure($procedureName, $bindings);
        return redirect()->back();
            
    }

}
