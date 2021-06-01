<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class CreateShopUsersSeeder extends Seeder
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
               'name_user'=>'Admin',
               'surname_user'=>'karach',
               'mobile_user'=>'+48676565434',
               'login_user'=>'administrator',
               'email_user'=>'admin@gmail.com',
               'password_user'=> bcrypt('Password123'),
               'id_role'=>'1',
               'id_user_address'=>'1',

            ],

            [
               'name_user'=>'User',
               'surname_user'=>'uzytkownik',
               'mobile_user'=>'+48676565999',
               'login_user'=>'user123',
               'email_user'=>'user@gmail.com',
               'password_user'=> bcrypt('User123'),
                'id_role'=>'2',
                'id_user_address'=>'1',

            ],

            [
                'name_user'=>'Patrycja',
                'surname_user'=>'Gawel',
                'mobile_user'=>'+48555555555',
                'login_user'=>'Patrycja123',
                'email_user'=>'Patrycja123@gmail.com',
                'password_user'=> bcrypt('Patrycja123'),
                 'id_role'=>'2',
                 'id_user_address'=>'1',
 
             ],

             [
                'name_user'=>'Mirek',
                'surname_user'=>'Klocek',
                'mobile_user'=>'232323232',
                'login_user'=>'Mirek213',
                'email_user'=>'Mirek321@gmail.com',
                'password_user'=> bcrypt('Mirek123'),
                 'id_role'=>'2',
                 'id_user_address'=>'1',
 
             ],
        ];

        foreach ($shop_user as $key => $value) {
            Shop_User::create($value);
        }
    }
}
