<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner_image;
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
        //dd($request->all());   
        $file = $request->file('slide');
        $file2 = $request->file('slide')->getClientOriginalName();
        $filename = pathinfo($file2, PATHINFO_FILENAME);
        $extension = pathinfo($file2, PATHINFO_EXTENSION);
        //dd($filename);

        
        /*
        $request->validate([
            "slide" => 'required|mimes:jpg,png,jpeg|max:2000000',
            "paragraph_large" =>  'required|min:10|max:50',
            "paragraph_small" =>  'required|min:5|max:50',
            "link_href" =>  'required|min:1|max:50',
            "link_desc" =>  'required|min:10|max:75',
        ]);*/

        $newImageName = time(). '-' . $filename . '.' . $extension;
        //$newImageName = time();
        ///dd($newImageName);

        $test = $file->move(public_path('img\banner'), $newImageName);
        //dd($newImageName);
        
        $slide = Banner_image::create([
            "path_to_image" => 'img/banner/'. $newImageName,
            "paragraph_large" => $request->input('paragraph-large'),
            "paragraph_small" => $request->input('paragraph-small'),
            "link_href" => $request->input('link'),
            "link_desc" => $request->input('link-description'),
        ]);

        return redirect()->route('admin.slider')->with('status', 'Slide has been added to main webiste banner!');
    

    }

    public function update(Request $request)
    {   
        //dd($request->all());
        $file = $request->file('slide');
        $file2 = $request->file('slide')->getClientOriginalName();
        $filename = pathinfo($file2, PATHINFO_FILENAME);
        $extension = pathinfo($file2, PATHINFO_EXTENSION);
        $newImageName = time(). '-' . $filename . '.' . $extension;
        $test = $file->move(public_path('img\banner'), $newImageName);
        
        $slide = Banner_image::where('id_banner_image', $request->input('id-slide'))->update([
            "path_to_image" => 'img/banner/'. $newImageName,
            "paragraph_large" => $request->input('paragraph-large'),
            "paragraph_small" => $request->input('paragraph-small'),
            "link_href" => $request->input('link'),
            "link_desc" => $request->input('link-description'),
        ]);

        return redirect()->route('admin.slider')->with('status', 'Slide has been updated!');
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
        
        return redirect()->back()->with('status', 'Slide has been removed from main webiste banner!');;
   
    }
}
