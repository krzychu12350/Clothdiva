<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class usersManagementController extends Controller
{
    public function index()
    {
        return view('backend.usersManagment');
       
    }

    public function destroy(Request $request)
    {   
     
        $id_user = $request->input('id_user');
        //dd($id_user);
        $procedureName = 'system.del_user';
        
        $bindings = [
            'id_user'  =>  $id_user,
        ];
            
        $result = DB::executeProcedure($procedureName, $bindings);
        return redirect()->back();
            
    }
}

