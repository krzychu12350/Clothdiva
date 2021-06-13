<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Banner_image;

class CreateBannerimagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bannerImage = [
            [
               'path_to_image'=>'img/banner/banner-1.jpg',
               'paragraph_large'=>'Most wanted',
               'paragraph_small'=>'The Carl Collection',
               'link_href'=>'#',
               'link_desc'=>'Shop now',
            ],

         
            [
               'path_to_image'=>'img/banner/banner-2.jpg',
               'paragraph_large'=>'Most wanted',
               'paragraph_small'=>'The Tom Collection',
               'link_href'=>'#',
               'link_desc'=>'Shop now',
            ],
        

            [
               'path_to_image'=>'img/banner/banner-3.jpg',
               'paragraph_large'=>'Most wanted',
               'paragraph_small'=>'The Chloe Collection',
               'link_href'=>'#',
               'link_desc'=>'Shop now',
            ],
        ];   

            foreach ($bannerImage as $key => $value) {
                Banner_image::create($value);
        }
    }
}
