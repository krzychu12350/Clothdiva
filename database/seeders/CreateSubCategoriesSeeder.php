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
               'name_of_subcategory'=>'Dresses',
               'image_of_subcategory'=>'images\subcategories\women\women1.jpg',
               'id_category'=>'1',  //1
            
            ],

            [
                'name_of_subcategory'=>'Skirts',
                'image_of_subcategory'=>'images\subcategories\women\women2.jpg',
                'id_category'=>'1', //2
            ],
            [
                'name_of_subcategory'=>'T-shirts',
                'image_of_subcategory'=>'images\subcategories\women\women3.jpg',
                'id_category'=>'1', //3
            ],
            [
                'name_of_subcategory'=>'Jeans',
                'image_of_subcategory'=>'images\subcategories\women\women4.jpg',
                'id_category'=>'1', //4
             ],
 
             [
                 'name_of_subcategory'=>'T-shirts',
                 'image_of_subcategory'=>'images\subcategories\men\men1.jpg',
                 'id_category'=>'2', //5
             ],

             [
                 'name_of_subcategory'=>'Hoodies',
                 'image_of_subcategory'=>'images\subcategories\men\men2.jpg',
                 'id_category'=>'2', //6
             ],

             [
                'name_of_subcategory'=>'Jeans',
                'image_of_subcategory'=>'images\subcategories\men\men3.jpg',
                'id_category'=>'2', //7
            ],

            [
                'name_of_subcategory'=>'Shorts',
                'image_of_subcategory'=>'images\subcategories\men\men4.jpg',
                'id_category'=>'2', //8
            ],

             [
                'name_of_subcategory'=>'Dresses',
                'image_of_subcategory'=>'images\subcategories\girls\girl1.jpg',
                'id_category'=>'3', //9
             ],
 
             [
                 'name_of_subcategory'=>'Skirts',
                 'image_of_subcategory'=>'images\subcategories\girls\girl2.jpg',
                 'id_category'=>'3', //10
             ],
             [
                 'name_of_subcategory'=>'T-Shirts',
                 'image_of_subcategory'=>'images\subcategories\girls\girl3.jpg',
                 'id_category'=>'3', //11
             ],
             [
                'name_of_subcategory'=>'Trousers',
                'image_of_subcategory'=>'images\subcategories\girls\girl4.jpg',
                'id_category'=>'3', //12
             ],
 
             [
                 'name_of_subcategory'=>'T-shirts',
                 'image_of_subcategory'=>'images\subcategories\boys\boy1.jpg',
                 'id_category'=>'4', //13
             ],
             [
                 'name_of_subcategory'=>'Hoodies',
                 'image_of_subcategory'=>'images\subcategories\boys\boy2.jpg',
                 'id_category'=>'4', //14
             ],

             [
                'name_of_subcategory'=>'Trousers',
                'image_of_subcategory'=>'images\subcategories\boys\boy3.jpg',
                'id_category'=>'4', //15
            ],

            [
                'name_of_subcategory'=>'Shirts',
                'image_of_subcategory'=>'images\subcategories\boys\boy4.jpg',
                'id_category'=>'4', //16
            ],
        ];
        foreach ($sub_category as $key => $value) {
            Sub_category::create($value);
        }
    }
}
