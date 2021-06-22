<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User_address;

class CreateUsersAddressesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_address = [
            [
        'name_of_city'=>'Rzeszow',
        'post_code'=>'56-434',
        'name_of_street'=>'Kwiatowski',
        //'voideship'=>'podkarpackie',
        'county'=>'rzeszowskie',
        'apartment_number'=>'23',
        'house_number'=>'5',
            ],

        ];
        foreach ($user_address as $key => $value) {
            User_address::create($value);
        }
    }
}
