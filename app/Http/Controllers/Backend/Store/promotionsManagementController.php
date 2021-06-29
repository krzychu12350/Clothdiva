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

    public function create(Request $request)
    {   
        /*
        BEGIN
UPDATE products pr SET pr.id_promotion=3 WHERE pr.id_sub_category=1 AND EXISTS (SELECT c.id_category FROM categories c INNER JOIN sub_categories sc ON sc.id_category = c.id_category AND sc.id_category=1);
COMMIT WORK;
END;*/
       
        $promotion_name = $request->input('promotion-name');
        $size_of_promotion = $request->input('size-of-promotion');
        $description = $request->input('description');
        $start_of_promotion = date("d/m/Y", strtotime($request->input('start-of-promotion')));
        $end_of_promotion =date("d/m/Y", strtotime($request->input('end-of-promotion')));

   
        dd($end_of_promotion);
        //$id_product = $request->input('id-products');
        //$category_product = $request->input('category-product');
        //$subcategory_product = $request->input('subcategory-product');

    
        //dd($size_of_promotion);

        //$id_promotion = $request->input('id_promotion');
       // dd($id_promotion);
     
        $procedureName = 'promotion_CRUD.cre_promotion';
        
        $bindings = [
            'promotion_name'     =>  $promotion_name, 
            'size_of_promotion'  =>  $size_of_promotion, 
            'description'        =>  $description, 
            'start_of_promotion' =>  $start_of_promotion,
            'end_of_promotion'   =>  $end_of_promotion,
        ];
            
        $result = DB::executeProcedure($procedureName, $bindings);
        return redirect()->back();
            
    }

    public function update(Request $request)
    {   
        $id_promotion = $request->input('id-promotion');
        $promotion_name = $request->input('promotion-name');
        $size_of_promotion = $request->input('size-of-promotion ');
        $description = $request->input('description');
        $start_of_promotion = $request->input('start-of-promotion');
        $end_of_promotion = $request->input('end-of-promotion');
        $id_product = $request->input('id-products');
        $category_product = $request->input('category-product');
        $subcategory_product = $request->input('subcategory-product');

        dd($request);
        //$id_promotion = $request->input('id_promotion');
       // dd($id_promotion);
       /*
        $procedureName = 'system.del_promotion';
        
        $bindings = [
            'id_promotion'  =>  $id_promotion,
        ];
            
        $result = DB::executeProcedure($procedureName, $bindings);
        return redirect()->back();*/
            
    }

    public function destroy(Request $request)
    {   
     
        $id_promotion = $request->input('id_promotion');
       // dd($id_promotion);
        $procedureName = 'promotion_CRUD.del_promotion';
        
        $bindings = [
            'id_promotion'  =>  $id_promotion,
        ];
            
        $result = DB::executeProcedure($procedureName, $bindings);
        return redirect()->back();
            
    }


}
