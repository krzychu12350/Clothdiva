<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'surname'=>'karach',
               'mobile'=>'+48676565434',
               'login'=>'administrator',
               'email'=>'admin@gmail.com',
               'password'=> bcrypt('Password123'),
               'id_role'=>'1',
               'id_user_address'=>'1',

            ],

            [
               'name'=>'User',
               'surname'=>'uzytkownik',
               'mobile'=>'+48676565999',
               'login'=>'user123',
               'email'=>'user@gmail.com',
               'password'=> bcrypt('User123'),
                'id_role'=>'2',
                'id_user_address'=>'1',

            ],

            [
                'name'=>'Patrycja',
                'surname'=>'Gawel',
                'mobile'=>'+48555555555',
                'login'=>'Patrycja123',
                'email'=>'Patrycja123@gmail.com',
                'password'=> bcrypt('Patrycja123'),
                 'id_role'=>'2',
                 'id_user_address'=>'1',
 
             ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
