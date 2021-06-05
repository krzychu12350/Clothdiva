<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Promotion;

class CreatePromotionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $promotion = [
            
            [
                'name_of_promotion' => 'Promotion for women products',
                'size_of_promotion' => '20',
                'promotion_start_date' => '2021-06-02',
                'promotion_end_date' => '2021-07-02',
                'description' => 'Monthly promotion for women products!',
            ],


            [
                'name_of_promotion' => 'Promotion for mens products',
                'size_of_promotion' => '35',
                'promotion_start_date' => '2021-07-22',
                'promotion_end_date' => '2021-07-29',
                'description' => 'Promotion for men clothes for one week only',
            ],

            [
                'name_of_promotion' => 'Promotion for girls products',
                'size_of_promotion' => '15',
                'promotion_start_date' => '2021-06-11',
                'promotion_end_date' => '2021-06-12',
                'description' => 'Weekend promotion for girls clothes',
            ],

            [
                'name_of_promotion' => 'Promotion for boys products',
                'size_of_promotion' => '40',
                'promotion_start_date' => '2021-06-11',
                'promotion_end_date' => '2021-06-12',
                'description' => 'Weekend promotion for boys clothes',
            ],    

        ];

        foreach ($promotion as $key => $value) {
            Promotion::create($value);
        }
    }
}
