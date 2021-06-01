<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CreatePromotionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $promotion
        [
            [
                'name_of_promotion' => 'Super rabat',
                'size_of_promotion' => '20',
                'promotion_start_date' => '',
                'promotion_end_date' => '',
                'description' => '',
            ],

        ];
    }
}
