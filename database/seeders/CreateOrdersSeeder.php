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
               'status'=>'Picked up by the courier',
               'date_of_placing_order'=>'2021-05-01',
               'id_ushop'=>'2',
               'payment_method' => 'Blik',
               'order_value'  => '500.32'
            ],

            [
               'status'=>'In progress',
               'date_of_placing_order'=>'2021-03-01',
               'id_ushop'=>'3',
               'payment_method' => 'PayPal',
               'order_value'  => '560.32'
            ],

            [
                'status'=>'Sent',
                'date_of_placing_order'=>'2021-09-12',
                'id_ushop'=>'2', 
                'payment_method' => 'PayPal',
                'order_value'  => '49.99'
             ],
        ];
        foreach ($order as $key => $value) {
            Order::create($value);
        }
    }
}
