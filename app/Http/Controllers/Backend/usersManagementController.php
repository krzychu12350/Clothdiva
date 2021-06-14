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
     
        $id_user = $request->input('id_user');
        $procedureName = 'users_CRUD.del_user';
        
        $bindings = [
            'id_user'  =>  $id_user,
        ];
            
        $result = DB::executeProcedure($procedureName, $bindings);
        return redirect()->back();
            
    }
}

