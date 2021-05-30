<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([ 

            CreateRolesSeeder::class,
            CreateUsersAddressesSeeder::class,
            CreateUsersSeeder::class,
            CreateInvoicesSeeder::class,
            CreateCategoriesSeeder::class,
            CreateSubCategoriesSeeder::class,
            CreatePromotionsSeeder::class,
            //CreatePaymentsSeeder::class,
            //CreateOrdersSeeder::class,
            //CreateProductsSeeder::class,
            CreateImagesSeeder::class,
            //CreateFavouriteProductsSeeder::class,
        ]);
    }
}
