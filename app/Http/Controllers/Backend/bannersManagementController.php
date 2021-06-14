<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class bannersManagementController extends Controller
{
    public function index()
    {
        $banner_sliders = DB::select("select bannerSlider_CRUD.red_banner_slides() as slidersdisplay from BANNER_IMAGES FETCH FIRST 1 ROWS ONLY");

        return view('backend.bannersManagment', compact('banner_sliders'));
       
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

        $id_banner_image = $request->input('id_banner_image');
        //dd($id_banner_image);
        $procedureName = 'bannerSlider_CRUD.del_slide';
        
        $bindings = [
            'id_banner_image'  =>  $id_banner_image,
        ];
            
        $result = DB::executeProcedure($procedureName, $bindings);
        
        return redirect()->back();
   
    }
}
