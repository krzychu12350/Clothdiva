<?php

namespace App\Http\Controllers\Backend\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Product;
use App\Models\Image;

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
        
        //dd($request->all());
        Product::create([
            'name' =>  $request->input('product-name'),
            'quantity' => $request->input('product-quantity'),
            'prize' => $request->input('product-prize'),
            'size_of_product' => $request->input('product-size'),
            'color' => $request->input('product-color'),
            'description' => $request->input('product-desc'),
            'composition_and_conservation' => $request->input('product-comp'),
            'id_sub_category' => $request->input('product-cat-and-subcat'),
        ]);
        
        $last_id = DB::table('products')->select('id_product')->latest('id_product')->first();
        //dd($last_id);  



        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $file) {
                //$file = $file3;
                $file2 = $file->getClientOriginalName();
          
                $filename = pathinfo($file2, PATHINFO_FILENAME);
                $extension = pathinfo($file2, PATHINFO_EXTENSION);
                $newImageName = 'images/'.time(). '-' . $filename. '.' . $extension;
                $newImageName2 = 'images/'.time(). '-' . $filename;

                Image::create([
                    'image' =>  $newImageName2,
                    'id_product' => $last_id->id_product,
                ]);

                $file->move(public_path('images'), $newImageName);
                
            }
        }

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
        return redirect()->back()->with('status', 'Product has been added!');
    }

    public function update(Request $request)
    {   
       // dd($request->all());  
        $id_product = $request->input('product-id');
        Product::where('id_product', '=', $id_product)->update([
            'name' =>  $request->input('product-name'),
            'quantity' => $request->input('product-quantity'),
            'prize' => $request->input('product-prize'),
            'size_of_product' => $request->input('product-size'),
            'color' => $request->input('product-color'),
            'description' => $request->input('product-desc'),
            'composition_and_conservation' => $request->input('product-comp'),
            'id_sub_category' => $request->input('product-cat-and-subcat'),
        ]);
        
        $first_id_where_id_product = DB::table('images')->select('id_image')->where('id_product', '=', $id_product)->first();
        $id = $first_id_where_id_product->id_image;
        //dd($first_id_where_id_product->id_image);

        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $file) {
                //dd($request->file('images'));
                $file2 = $file->getClientOriginalName();
                $filename = pathinfo($file2, PATHINFO_FILENAME);
                $extension = pathinfo($file2, PATHINFO_EXTENSION);
                $newImageName = 'images/'.time(). '-' . $filename. '.' . $extension;
                $newImageName2 = 'images/'.time(). '-' . $filename;

                Image::where('id_product', '=', $id_product)->where('id_image', '=',$id)->update([
                    'image' =>  $newImageName2,
                ]);

                $file->move(public_path('images'), $newImageName);
                $id++;
                
            }
        }

        return redirect()->back()->with('status', 'Product has been updated!');
   
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
