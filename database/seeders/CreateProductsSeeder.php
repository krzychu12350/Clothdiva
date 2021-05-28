<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
               'name'=>'stringi',
               'quantity'=>'200',
               'prize'=>'2.42',
               'color'=>'sraczkowo-buraczkowy',
               'size'=>'XL',
               'description'=>'eluwina',
               'composition_and_conservation'=>'wypierdoldokosza i sie ciesz',
               'id_sub_category'=>'1',
               'id_order'=>'1',
            ],

           
        ];
        foreach ($product as $key => $value) {
            Product::create($value);
        }
    }
}
