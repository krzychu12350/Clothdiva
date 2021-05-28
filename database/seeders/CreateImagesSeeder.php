<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Image;

class CreateImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $path = file_get_contents( 'public/images/logo2.jpg' );
        $base64 = bin2hex($path);

        $image = [
            [
            'image' => $base64,
            ],

        ];
        foreach ($image as $key => $value) {
            Image::create($value);
        }
    }
}
