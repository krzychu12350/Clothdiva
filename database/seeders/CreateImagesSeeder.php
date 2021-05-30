<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Image;
use DB;

class CreateImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $path = 'storage/app/public/images/jeans1.jpg';
        $path1 = 'storage/app/public/images/jeans2.jpg';
        $path2 = 'storage/app/public/images/kurtka1.jpg';
        
        //$base64 = bin2hex($path);

        $image = [

            [
            'image' => $path,
            'id_product' => '1',
            ],

            [
            'image' => $path1,
            'id_product' => '2',
            ],

            [
            'image' => $path2,
            'id_product' => '3',
            ],
    

        ];
        foreach ($image as $key => $value) {
            Image::create($value);
        }
        
 
    }
}
