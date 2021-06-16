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
    public function create(Request $request)
    {   
        dd($request);   
    }

    public function update(Request $request)
    {   
        dd($request);  
    }

    
    public function destroy(Request $request)
    {   

        $id_product = $request->input('idproduct');
        /*
        'name'=>$singlerow->name,
        'prize'=>$singlerow->prize,
        'size'=>$singlerow->size_of_product,
        'description'=>$singlerow->description,*/

        //dd($id_product);
        $procedureName = 'products_CRUD.del_product';
        
        $bindings = [
            '$id_product'  =>  $id_product,
        ];
            
        $result = DB::executeProcedure($procedureName, $bindings);
        
        return redirect()->back();
   
    }
}
