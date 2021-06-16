<?php

namespace App\Http\Controllers\Backend\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use PDO;
use DB;

class subcategoriesManagementController extends Controller
{
    protected $redirectTo = RouteServiceProvider::HOME;

    public function index()
    {
        return view('backend.store.subcategoriesManagement');
       
    }
    public function create(Request $request)
    {
        $subcat_name = $request->input('subcategory-name');
        $cat_name = $request->input('category-name');
        $id_subcat = $request->input('id_subcat');
         $procedureName = 'subcategories_CRUD.add_subcategory';
         
         $bindings = [
             'subc_name'  =>  $subcat_name,
             'id_cat'  => $cat_name,
         ];
             
         $result = DB::executeProcedure($procedureName, $bindings);
         
         return redirect()->back();
    }
    public function update(Request $request)
    {
        dd($request);
    }

    public function destroy(Request $request)
    {   
       // return view('frontend.shopcart');
       $subcat_name = $request->input('subcat_name');
       $cat_name = $request->input('cat_name');
       // dd($request);
        $procedureName = 'subcategories_CRUD.del_subcategory';
        
        $bindings = [
            'subcategory_name'  =>  $subcat_name,
            'category_name'  => $cat_name,
        ];
            
        $result = DB::executeProcedure($procedureName, $bindings);
        //dd($result);
        
        return redirect()->back();
                /*
        $pdo = DB::getPdo();
        $p1 = 'Dresses';
        $p2 = 'Girls';
        $stmt = $pdo->prepare("begin del_subcategory(:p1, :p2); end;");
        $stmt->bindParam(':p1', $p1, PDO::PARAM_INT);
        $stmt->bindParam(':p2', $p2, PDO::PARAM_INT);
        $stmt->execute();
        return view('frontend.shopcart');
        */
    }
}
