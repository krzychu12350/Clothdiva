<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;


class CreateCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            [
               'name_of_category'=>'Women',
            ],

         
            [
                'name_of_category'=>'Men',
            ],
        

            [
                'name_of_category'=>'Girls',
            ],

            [
                'name_of_category'=>'Boys',
            ],
        ];   

            foreach ($category as $key => $value) {
                Category::create($value);
        }
    }
}
