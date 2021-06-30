<?php

namespace App\Http\Controllers\Backend\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Product;

class productsManagementController extends Controller
{
    public function index()
    {
        $scmanagement = DB::select("select subcategories_CRUD.red_subcategories() as scmanagement from sub_categories FETCH FIRST 1 ROWS ONLY");
    
        $array_sub_category= [];
        $array_category = [];
        foreach ($scmanagement as $single) {
            array_push($array_sub_category, $single->name_of_subcategory);
            array_push($array_category, $single->name_of_category);
            $combined = array_map(function($a, $b) { return $a . ' ' . $b; }, $array_category, $array_sub_category);
        }
        //dd($combined);
       
        return view('backend.store.productsManagement',compact('combined'));
       
    }
    public function create(Request $request)
    {   
     //  dd($request->all());  

        $product = Product::create([
            'name' =>  $request->input('product-name'),
            'quantity' => $request->input('product-quantity'),
            'prize' => $request->input('product-prize'),
            'size_of_product' => $request->input('product-size'),
            'color' => $request->input('product-color'),
            'description' => $request->input('product-size'),
            'composition_and_conservation' => '100% Cotton',
            'id_sub_category' => '1',
        ]);

       /*
        $file = $request->file('slide');
        $file2 = $request->file('slide')->getClientOriginalName();
        $filename = pathinfo($file2, PATHINFO_FILENAME);
        $extension = pathinfo($file2, PATHINFO_EXTENSION);
        //dd($filename);

        
   
        $request->validate([
            "slide" => 'required|mimes:jpg,png,jpeg|max:2000000',
            "paragraph_large" =>  'required|min:10|max:50',
            "paragraph_small" =>  'required|min:5|max:50',
            "link_href" =>  'required|min:1|max:50',
            "link_desc" =>  'required|min:10|max:75',
        ]);

        $newImageName = time(). '-' . $filename . '.' . $extension;
        //$newImageName = time();
        ///dd($newImageName);

        $test = $file->move(public_path('img\banner'), $newImageName);
        //dd($newImageName);
        
      

        
        /*
        $this->validate($request, [
                'filenames' => 'required',
                'filenames.*' => 'mimes:doc,pdf,docx,zip'
        ]);


        if($request->hasfile('filenames'))
        {
            foreach($request->file('filenames') as $file)
            {
                $name = time().'.'.$file->extension();
                $file->move(public_path().'/files/', $name);  
                $data[] = $name;  
            }
        }


        $file= new File();
        $file->filenames=json_encode($data);
        $file->save();
        return back()->with('success', 'Data Your files has been successfully added');
        */
 
    }

    public function update(Request $request)
    {   
        dd($request);  
    }

    
    public function destroy(Request $request)
    {   

        $id_product = $request->input('idproduct');
        //dd($id_product);
        /*
        'name'=>$singlerow->name,
        'prize'=>$singlerow->prize,
        'size'=>$singlerow->size_of_product,
        'description'=>$singlerow->description,*/

        //dd($id_product);
        $procedureName = 'products_CRUD.del_product';
        
        $bindings = [
            'idproduct'  =>  $id_product,
        ];
            
        $result = DB::executeProcedure($procedureName, $bindings);
        
        return redirect()->back()->with('status', 'Product has been removed!');
   
    }
}
