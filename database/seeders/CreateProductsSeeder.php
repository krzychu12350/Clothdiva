<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class CreateProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $product = [
            [
               'name'=>'Niebieskie jeansy',
               'quantity'=>'200',
               'prize'=>'79.99',
               'color'=>'Blue',
               'size_of_product'=>'XS',
               'description'=>'Fajne jeansy',
               'composition_and_conservation'=>'NEWAE',
               'id_sub_category'=>'2',
               'id_order' => '1',
            ],

            [
                'name'=>'Czerwone spodenki',
                'quantity'=>'20',
                'prize'=>'49.99',
                'color'=>'Red',
                'size_of_product'=>'L',
                'description'=>'Fajne spodenki',
                'composition_and_conservation'=>'NEWAE',
                'id_sub_category'=>'2',
                'id_order' => '2',    
            ],

            [
                'name'=>'Białe snekarsy',
                'quantity'=>'20',
                'prize'=>'49.99',
                'color'=>'Red',
                'size_of_product'=>'XL',
                'description'=>'Fajne buty',
                'composition_and_conservation'=>'NEWAE',
                'id_sub_category'=>'4',
                'id_order' => '3',
            ],
            
            [
                'name'=>'Jogery',
                'quantity'=>'200',
                'prize'=>'79.99',
                'color'=>'Blue',
                'size_of_product'=>'XS',
                'description'=>'Fajne jeansy',
                'composition_and_conservation'=>'NEWAE',
                'id_sub_category'=>'2',
                'id_order' => '',
             ],
 
             [
                 'name'=>'Shorty',
                 'quantity'=>'20',
                 'prize'=>'49.99',
                 'color'=>'Red',
                 'size_of_product'=>'L',
                 'description'=>'Fajne spodenki',
                 'composition_and_conservation'=>'NEWAE',
                 'id_sub_category'=>'3',
                 'id_order' => '',
             ],
 
             [
                 'name'=>'Czapka z daszkiem',
                 'quantity'=>'20',
                 'prize'=>'49.99',
                 'color'=>'Red',
                 'size_of_product'=>'XL',
                 'description'=>'Fajne buty',
                 'composition_and_conservation'=>'NEWAE',
                 'id_sub_category'=>'4',
                 'id_order' => '',
             ],

        ];
        foreach ($product as $key => $value) {
            Product::create($value);
        }
    }
}
