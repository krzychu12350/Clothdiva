<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;

class CreateOrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order = [
            [
               'status'=>'niewkuriwaj',
               'date_of_placing_order'=>'2021-05-01',
               'id_user'=>'2',
            ],

            [
               'status'=>'mnie',
               'date_of_placing_order'=>'2021-03-01',
               'id_user'=>'3',
            ],
        ];
        foreach ($order as $key => $value) {
            Order::create($value);
        }
    }
}
