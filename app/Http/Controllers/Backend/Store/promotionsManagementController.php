<?php

namespace App\Http\Controllers\Backend\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Product;

class promotionsManagementController extends Controller
{
    public function index()
    {

        DB::setDateFormat('DD/MM/YYYY');
        $scmanagement = DB::select("select subcategories_CRUD.red_subcategories() as scmanagement from sub_categories FETCH FIRST 1 ROWS ONLY");
        $array_sub_category= [];
        $array_category = [];
        foreach ($scmanagement as $single) {
            array_push($array_sub_category, $single->name_of_subcategory);
            array_push($array_category, $single->name_of_category);
            $combined = array_map(function($a, $b) { return $a . ' ' . $b; }, $array_category, $array_sub_category);
        }

        return view('backend.store.promotionsManagement',compact('combined'));
       
    }

    public function create(Request $request)
    {   

        $promotion_name = $request->input('promotion-name');
        $size_of_promotion = $request->input('size-of-promotion');
        $description = $request->input('description');
        $start_of_promotion = date("d/m/Y", strtotime($request->input('start-of-promotion')));
        $end_of_promotion =date("d/m/Y", strtotime($request->input('end-of-promotion')));
        $id_subcateogry = $request->input('product-cat-and-subcat');

       DB::table('promotions')->insert([
            'name_of_promotion'     =>  $promotion_name, 
            'size_of_promotion'  =>  $size_of_promotion, 
            'promotion_start_date' =>  $start_of_promotion,
            'promotion_end_date'   =>  $end_of_promotion,
            'description'        =>  $description, 
        ]);   

        $last_id = DB::table('promotions')->select('id_promotion')->latest('id_promotion')->first();
        $id = $last_id->id_promotion;
        //dd($id, $id_subcateogry);
      
        //DB::table('products')->where('id_sub_category', '=', $id_subcateogry)->update(['id_promotion', '=', $id ]); 
        
        Product::where('id_sub_category', $id_subcateogry)->update(['id_promotion' => $id]);
    
        return redirect()->back()->with('status', 'Promotion has been added!');
            
    }

    public function update(Request $request)
    {   
        dd($request->all());
        $promotion_name = $request->input('promotion-name');
        $size_of_promotion = $request->input('size-of-promotion');
        $description = $request->input('description');
        $start_of_promotion = date("d/m/Y", strtotime($request->input('start-of-promotion')));
        $end_of_promotion =date("d/m/Y", strtotime($request->input('end-of-promotion')));
        $id_subcateogry = $request->input('product-cat-and-subcat');
        $id_promotion = $request->input('promotion-id');

       DB::table('promotions')->where('id_promotion', $id_promotion)->update([
            'name_of_promotion'     =>  $promotion_name, 
            'size_of_promotion'  =>  $size_of_promotion, 
            'promotion_start_date' =>  $start_of_promotion,
            'promotion_end_date'   =>  $end_of_promotion,
            'description'        =>  $description, 
        ]);   

       // $last_id = DB::table('promotions')->select('id_promotion')->latest('id_promotion')->first();
        //$id = $last_id->id_promotion;
        //dd($id, $id_subcateogry);
        
        Product::where('id_sub_category', $id_subcateogry)->update(['id_promotion' => $id_promotion]);

        return redirect()->back()->with('status', 'Promotion has been updated!');
            
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
        return redirect()->back()->with('status', 'Promotion has been removed!');
            
    }


}
