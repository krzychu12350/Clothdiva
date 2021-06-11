<?php

namespace App\Http\Controllers\Backend\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class promotionsManagementController extends Controller
{
    public function index()
    {
        return view('backend.store.promotionsManagement');
       
    }

    public function destroy(Request $request)
    {   
     
        $id_promotion = $request->input('id_promotion');
       // dd($id_promotion);
        $procedureName = 'system.del_promotion';
        
        $bindings = [
            'id_promotion'  =>  $id_promotion,
        ];
            
        $result = DB::executeProcedure($procedureName, $bindings);
        return redirect()->back();
            
    }
}
