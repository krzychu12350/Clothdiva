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
        $name = $request->input('user-name');
        $surname = $request->input('user-surname');
        $mobile = $request->input('user-mobile');
        $email = $request->input('user-email');
        $id_role = $request->input('user-role');
        ///dd($request);    

        $procedureName = 'users_CRUD.cre_user';

        $bindings = [
            'uname'     => $name,
            'surname'  => $surname,
            'mobile'    => $mobile,
            'email'     => $email,
            'idrole'    => $id_role,
            
        ];
            
        $result = DB::executeProcedure($procedureName, $bindings); 

        return redirect()->back()->with('status', 'User has been created!');

    }
       
    public function update(Request $request)
    {   
        $id_user = $request->input('id_user');
        $name = $request->input('user-name');
        $surname = $request->input('user-surname');
        $mobile = $request->input('user-mobile');
        $email = $request->input('user-email');
        $id_role = $request->input('user-role');
       // dd($request->all()); 
        
        $procedureName = 'users_CRUD.edit_user';

        $bindings = [
            'uname'     => $name,
            'surname'  => $surname,
            'mobile'    => $mobile,
            'email'     => $email,
            'idrole'    => $id_role,
            'idushop'   => $id_user,
            
        ];
            
        $result = DB::executeProcedure($procedureName, $bindings); 

        return redirect()->back()->with('status', 'User has been updated!');

    
    } 

    public function destroy(Request $request)
    {   
     
        $id_user = $request->input('id_user');
        $procedureName = 'users_CRUD.del_user';
        
        $bindings = [
            'id_user'  =>  $id_user,
        ];
            
        $result = DB::executeProcedure($procedureName, $bindings);

        return redirect()->back()->with('status', 'User has been removed!');

            
    }
}

