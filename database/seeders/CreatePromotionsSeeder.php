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
                'promotion_start_date' => '02/06/2021',
                'promotion_end_date' => '25/06/2021',
                'description' => 'Monthly promotion for women products!',
            ],


            [
                'name_of_promotion' => 'Promotion for mens products',
                'size_of_promotion' => '35',
                'promotion_start_date' => '07/06/2021',
                'promotion_end_date' => '20/06/2021',
                'description' => 'Promotion for men clothes for one week only',
            ],

            [
                'name_of_promotion' => 'Promotion for girls products',
                'size_of_promotion' => '15',
                'promotion_start_date' => '11/06/2021',
                'promotion_end_date' => '12/06/2021',
                'description' => 'Weekend promotion for girls clothes',
            ],

            [
                'name_of_promotion' => 'Promotion for boys products',
                'size_of_promotion' => '40',
                'promotion_start_date' => '11/08/2021',
                'promotion_end_date' => '21/08/2021',
                'description' => 'Weekend promotion for boys clothes',
            ],    

        ];

        foreach ($promotion as $key => $value) {
            Promotion::create($value);
        }
    }
}
