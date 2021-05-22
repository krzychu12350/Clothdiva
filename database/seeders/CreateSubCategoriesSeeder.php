<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Sub_category;
class CreateSubCategoriesSeeder extends Seeder
{
    //$file = file_get_contents(__DIR__ . 'public/images/logo.jpg');
   // $photo = Image::make($file);
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {      
         //$photo = $request->file('C:\Users\Krzychu\Desktop\kibel2.png')->store('avatars');
         //$file = file_get_contents('C:\Users\Krzychu\Desktop\Jagermeister.jpg');
         //$photo2 = Image::make($file);
         //$photo = 'C:\Users\Krzychu\Desktop\Jagermeister.jpg';
        $sub_category = [
            [
               'name_of_subcategory'=>'Jeans',
               'id_category'=>'1',
            ],

            [
                'name_of_subcategory'=>'Shorts',
             
                'id_category'=>'1',
            ],
            [
                'name_of_subcategory'=>'Sneakers',
    
                'id_category'=>'1',
            ],
            [
                'name_of_subcategory'=>'Suits',
            
                'id_category'=>'2',
             ],
 
             [
                 'name_of_subcategory'=>'Flats',
              
                 'id_category'=>'2',
             ],
             [
                 'name_of_subcategory'=>'Leather',
              
                 'id_category'=>'2',
             ],
             [
                'name_of_subcategory'=>'Shoes',
             
                'id_category'=>'3',
             ],
 
             [
                 'name_of_subcategory'=>'Dresses',
                
                 'id_category'=>'3',
             ],
             [
                 'name_of_subcategory'=>'Bags',
              
                 'id_category'=>'3',
             ],
             [
                'name_of_subcategory'=>'Jackets',
               
                'id_category'=>'4',
             ],
 
             [
                 'name_of_subcategory'=>'Caps',
               
                 'id_category'=>'4',
             ],
             [
                 'name_of_subcategory'=>'T-shirts',
                
                 'id_category'=>'4',
             ],
        ];
        foreach ($sub_category as $key => $value) {
            Sub_category::create($value);
        }
    }
}
