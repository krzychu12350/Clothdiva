<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Image;
use DB;

class CreateImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $path = 'public/images/women/dress_A_1';
        $path1 = 'public/images/women/dress_A_2';
        $path2 = 'public/images/women/dress_A_3';

        $path3 = 'public/images/women/dress_B_1';
        $path4 = 'public/images/women/dress_B_2';
        $path5 = 'public/images/women/dress_B_3';

        $path6 = 'public/images/women/dress_C_1';
        $path7 = 'public/images/women/dress_C_2';
        $path8 = 'public/images/women/dress_C_3';

        $path9 = 'public/images/women/skirt_A_1';
        $path10 = 'public/images/women/skirt_A_2';
        $path11 = 'public/images/women/skirt_A_3';

        $path12 = 'public/images/women/skirt_B_1';
        $path13 = 'public/images/women/skirt_B_2';
        $path14 = 'public/images/women/skirt_B_3';

        $path15 = 'public/images/women/skirt_C_1';
        $path16 = 'public/images/women/skirt_C_2';
        $path17 = 'public/images/women/skirt_C_3';

        $path18 = 'public/images/women/tshirt_A_1';
        $path19 = 'public/images/women/tshirt_A_2';
        $path20 = 'public/images/women/tshirt_A_3';

        $path21 = 'public/images/women/tshirt_B_1';
        $path22 = 'public/images/women/tshirt_B_2';
        $path23 = 'public/images/women/tshirt_B_3';

        $path24 = 'public/images/women/tshirt_C_1';
        $path25 = 'public/images/women/tshirt_C_2';
        $path26 = 'public/images/women/tshirt_C_3';

        $path27 = 'public/images/women/tshirt_A_1';
        $path28 = 'public/images/women/tshirt_A_2';
        $path29 = 'public/images/women/tshirt_A_3';

        $path30 = 'public/images/women/jeans_B_1';
        $path31 = 'public/images/women/jeans_B_2';
        $path32 = 'public/images/women/jeans_B_3';

        $path33 = 'public/images/women/jeans_C_1';
        $path34 = 'public/images/women/jeans_C_2';
        $path35 = 'public/images/women/jeans_C_3';

        //MEN

        $path36 = 'public/images/men/shirt_A_1';
        $path37 = 'public/images/men/shirt_A_2';
        $path38 = 'public/images/men/shirt_A_3';

        $path39 = 'public/images/men/shirt_B_1';
        $path40 = 'public/images/men/shirt_B_2';
        $path41 = 'public/images/men/shirt_B_3';

        $path42 = 'public/images/men/shirt_C_1';
        $path43 = 'public/images/men/shirt_C_2';
        $path44 = 'public/images/men/shirt_C_3';

        $path45 = 'public/images/men/hoodie_A_1';
        $path46 = 'public/images/men/hoodie_A_2';
        $path47 = 'public/images/men/hoodie_A_3';

        $path48 = 'public/images/men/hoodie_B_1';
        $path49 = 'public/images/men/hoodie_B_2';
        $path50 = 'public/images/men/hoodie_B_3';

        $path51 = 'public/images/men/hoodie_C_1';
        $path52 = 'public/images/men/hoodie_C_2';
        $path53 = 'public/images/men/hoodie_C_3';

        $path54 = 'public/images/men/jeans_A_1';
        $path55 = 'public/images/men/jeans_A_2';
        $path56 = 'public/images/men/jeans_A_3';

        $path57 = 'public/images/men/jeans_B_1';
        $path58 = 'public/images/men/jeans_B_2';
        $path59 = 'public/images/men/jeans_B_3';

        $path60 = 'public/images/men/jeans_C_1';
        $path61 = 'public/images/men/jeans_C_2';
        $path62 = 'public/images/men/jeans_C_3';

        $path63 = 'public/images/men/shorts_A_1';
        $path64 = 'public/images/men/shorts_A_2';
        $path65 = 'public/images/men/shorts_A_3';

        $path66 = 'public/images/men/shorts_B_1';
        $path67 = 'public/images/men/shorts_B_2';
        $path68 = 'public/images/men/shorts_B_3';

        $path69 = 'public/images/men/shorts_C_1';
        $path70 = 'public/images/men/shorts_C_2';
        $path71 = 'public/images/men/shorts_C_3';

        //GIRLS

        $path72 = 'public/images/girls/dress_A_1';
        $path73 = 'public/images/girls/dress_A_2';
        $path74 = 'public/images/girls/dress_A_3';

        $path75 = 'public/images/girls/dress_B_1';
        $path76 = 'public/images/girls/dress_B_2';
        $path77 = 'public/images/girls/dress_B_3';

        $path78 = 'public/images/girls/dress_C_1';
        $path79 = 'public/images/girls/dress_C_2';
        $path80 = 'public/images/girls/dress_C_3';

        $path81 = 'public/images/girls/skirt_A_1';
        $path82 = 'public/images/girls/skirt_A_2';
        $path83 = 'public/images/girls/skirt_A_3';

        $path84 = 'public/images/girls/skirt_B_1';
        $path85 = 'public/images/girls/skirt_B_2';
        $path86 = 'public/images/girls/skirt_B_3';

        $path87 = 'public/images/girls/skirt_C_1';
        $path88 = 'public/images/girls/skirt_C_2';
        $path89 = 'public/images/girls/skirt_C_3';

        $path90 = 'public/images/girls/shirt_A_1';
        $path91 = 'public/images/girls/shirt_A_2';
        $path92 = 'public/images/girls/shirt_A_3';

        $path93 = 'public/images/girls/shirt_B_1';
        $path94 = 'public/images/girls/shirt_B_2';
        $path95 = 'public/images/girls/shirt_B_3';

        $path96 = 'public/images/girls/shirt_C_1';
        $path97 = 'public/images/girls/shirt_C_2';
        $path98 = 'public/images/girls/shirt_C_3';

        $path99  = 'public/images/girls/trousers_A_1';
        $path100 = 'public/images/girls/trousers_A_2';
        $path101 = 'public/images/girls/trousers_A_3';

        $path102 = 'public/images/girls/trousers_B_1';
        $path103 = 'public/images/girls/trousers_B_2';
        $path104 = 'public/images/girls/trousers_B_3';

        $path105 = 'public/images/girls/trousers_C_1';
        $path106 = 'public/images/girls/trousers_C_2';
        $path107 = 'public/images/girls/trousers_C_3';

        //boys

        $path108 = 'public/images/boys/tshirt_A_1';
        $path109 = 'public/images/boys/tshirt_A_2';
        $path110 = 'public/images/boys/tshirt_A_3';

        $path111 = 'public/images/boys/tshirt_B_1';
        $path112 = 'public/images/boys/tshirt_B_2';
        $path113 = 'public/images/boys/tshirt_B_3';

        $path114 = 'public/images/boys/tshirt_C_1';
        $path115 = 'public/images/boys/tshirt_C_2';
        $path116 = 'public/images/boys/tshirt_C_3';

        $path117 = 'public/images/boys/hoodie_A_1';
        $path118 = 'public/images/boys/hoodie_A_2';
        $path119 = 'public/images/boys/hoodie_A_3';

        $path120 = 'public/images/boys/hoodie_B_1';
        $path121 = 'public/images/boys/hoodie_B_2';
        $path122 = 'public/images/boys/hoodie_B_3';

        $path123 = 'public/images/boys/hoodie_C_1';
        $path124 = 'public/images/boys/hoodie_C_2';
        $path125 = 'public/images/boys/hoodie_C_3';

        $path126 = 'public/images/boys/trousers_A_1';
        $path127 = 'public/images/boys/trousers_A_2';
        $path128 = 'public/images/boys/trousers_A_3';

        $path129 = 'public/images/boys/trousers_B_1';
        $path130 = 'public/images/boys/trousers_B_2';
        $path131 = 'public/images/boys/trousers_B_3';

        $path132 = 'public/images/boys/trousers_C_1';
        $path133 = 'public/images/boys/trousers_C_2';
        $path134 = 'public/images/boys/trousers_C_3';

        $path135 = 'public/images/boys/shirt_A_1';
        $path136 = 'public/images/boys/shirt_A_2';
        $path137 = 'public/images/boys/shirt_A_3';

        $path138 = 'public/images/boys/shirt_B_1';
        $path139 = 'public/images/boys/shirt_B_2';
        $path140 = 'public/images/boys/shirt_B_3';

        $path141 = 'public/images/boys/shirt_C_1';
        $path142 = 'public/images/boys/shirt_C_2';
        $path143 = 'public/images/boys/shirt_C_3';

        $image = [

            [
            'image' => $path,
            'id_product' => '1',
            ],

            [
            'image' => $path1,
            'id_product' => '1',
            ],

            [
            'image' => $path2,
            'id_product' => '1',
            ],



            [
            'image' => $path3,
            'id_product' => '2',
            ],
    
            [
            'image' => $path4,
            'id_product' => '2',
            ],
    
            [
            'image' => $path5,
            'id_product' => '2',
            ],


            [
            'image' => $path6,
            'id_product' => '3',
            ],
    
            [
            'image' => $path7,
            'id_product' => '3',
            ],
    
            [
            'image' => $path8,
            'id_product' => '3',
            ],

            [
            'image' => $path9,
            'id_product' => '4',
            ],
    
            [
            'image' => $path10,
            'id_product' => '4',
            ],
    
            [
            'image' => $path11,
            'id_product' => '4',
            ],

            [
            'image' => $path12,
            'id_product' => '5',
            ],
    
            [
            'image' => $path13,
            'id_product' => '5',
            ],
    
            [
            'image' => $path14,
            'id_product' => '5',
            ],


            [
            'image' => $path15,
            'id_product' => '6',
            ],
    
            [
            'image' => $path16,
            'id_product' => '6',
            ],
    
            [
            'image' => $path17,
            'id_product' => '6',
            ],


            [
            'image' => $path18,
            'id_product' => '7',
            ],
    
            [
            'image' => $path19,
            'id_product' => '7',
            ],
    
            [
            'image' => $path20,
            'id_product' => '7',
            ],


            [
            'image' => $path21,
            'id_product' => '8',
            ],
    
            [
            'image' => $path22,
            'id_product' => '8',
            ],
    
            [
            'image' => $path23,
            'id_product' => '8',
            ],

        
            [
            'image' => $path24,
            'id_product' => '9',
            ],
    
            [
            'image' => $path25,
            'id_product' => '9',
            ],
    
            [
            'image' => $path26,
            'id_product' => '9',
            ],

            [
            'image' => $path27,
            'id_product' => '10',
            ],
    
            [
            'image' => $path28,
            'id_product' => '10',
            ],
    
            [
            'image' => $path29,
            'id_product' => '10',
            ],

            [
            'image' => $path30,
            'id_product' => '11',
            ],
    
            [
            'image' => $path31,
            'id_product' => '11',
            ],
    
            [
            'image' => $path32,
            'id_product' => '11',
            ],


            [
            'image' => $path33,
            'id_product' => '12',
            ],
    
            [
            'image' => $path34,
            'id_product' => '12',
            ],
    
            [
            'image' => $path35,
            'id_product' => '12',
            ],

            [
            'image' => $path36,
            'id_product' => '13',
            ],
    
            [
            'image' => $path37,
            'id_product' => '13',
            ],
    
            [
            'image' => $path38,
            'id_product' => '13',
            ],


            [
            'image' => $path39,
            'id_product' => '14',
            ],
    
            [
            'image' => $path40,
            'id_product' => '14',
            ],
    
            [
            'image' => $path41,
            'id_product' => '14',
            ],


            [
            'image' => $path42,
            'id_product' => '15',
            ],
    
            [
            'image' => $path43,
            'id_product' => '15',
            ],
    
            [
            'image' => $path44,
            'id_product' => '15',
            ],


            [
            'image' => $path45,
            'id_product' => '16',
            ],
    
            [
            'image' => $path46,
            'id_product' => '16',
            ],
    
            [
            'image' => $path47,
            'id_product' => '16',
            ],


            [
            'image' => $path48,
            'id_product' => '17',
            ],
    
            [
            'image' => $path49,
            'id_product' => '17',
            ],
    
            [
            'image' => $path50,
            'id_product' => '17',
            ],


            [
            'image' => $path51,
            'id_product' => '18',
            ],
    
            [
            'image' => $path52,
            'id_product' => '18',
            ],
    
            [
            'image' => $path53,
            'id_product' => '18',
            ],


            [
            'image' => $path54,
            'id_product' => '19',
            ],
    
            [
            'image' => $path55,
            'id_product' => '19',
            ],
    
            [
            'image' => $path56,
            'id_product' => '19',
            ],


            [
            'image' => $path57,
            'id_product' => '20',
            ],
    
            [
            'image' => $path58,
            'id_product' => '20',
            ],
    
            [
            'image' => $path59,
            'id_product' => '20',
            ],


            [
            'image' => $path60,
            'id_product' => '21',
            ],
    
            [
            'image' => $path61,
            'id_product' => '21',
            ],
    
            [
            'image' => $path62,
            'id_product' => '21',
            ],

            [
            'image' => $path63,
            'id_product' => '22',
            ],
    
            [
            'image' => $path64,
            'id_product' => '22',
            ],
    
            [
            'image' => $path65,
            'id_product' => '22',
            ],



            [
            'image' => $path66,
            'id_product' => '23',
            ],
    
            [
            'image' => $path67,
            'id_product' => '23',
            ],
    
            [
            'image' => $path68,
            'id_product' => '23',
            ],


            [
            'image' => $path69,
            'id_product' => '24',
            ],
    
            [
            'image' => $path70,
            'id_product' => '24',
            ],
    
            [
            'image' => $path71,
            'id_product' => '24',
            ],


            [
            'image' => $path72,
            'id_product' => '25',
            ],
    
            [
            'image' => $path73,
            'id_product' => '25',
            ],
    
            [
            'image' => $path74,
            'id_product' => '25',
            ],


            [
            'image' => $path75,
            'id_product' => '26',
            ],
    
            [
            'image' => $path76,
            'id_product' => '26',
            ],
    
            [
            'image' => $path77,
            'id_product' => '26',
            ],


            [
            'image' => $path78,
            'id_product' => '27',
            ],
    
            [
            'image' => $path79,
            'id_product' => '27',
            ],
    
            [
            'image' => $path80,
            'id_product' => '27',
            ],

            [
            'image' => $path81,
            'id_product' => '28',
            ],
    
            [
            'image' => $path82,
            'id_product' => '28',
            ],
    
            [
            'image' => $path83,
            'id_product' => '28',
            ],

            [
            'image' => $path84,
            'id_product' => '29',
            ],
    
            [
            'image' => $path85,
            'id_product' => '29',
            ],
    
            [
            'image' => $path86,
            'id_product' => '29',
            ],


            [
            'image' => $path87,
            'id_product' => '30',
            ],
    
            [
            'image' => $path88,
            'id_product' => '30',
            ],
    
            [
            'image' => $path89,
            'id_product' => '30',
            ],


            [
            'image' => $path90,
            'id_product' => '31',
            ],
    
            [
            'image' => $path91,
            'id_product' => '31',
            ],
    
            [
            'image' => $path92,
            'id_product' => '31',
            ],

            [
            'image' => $path93,
            'id_product' => '32',
            ],
    
            [
            'image' => $path94,
            'id_product' => '32',
            ],
    
            [
            'image' => $path95,
            'id_product' => '32',
            ],


            [
            'image' => $path96,
            'id_product' => '33',
            ],
    
            [
            'image' => $path97,
            'id_product' => '33',
            ],
    
            [
            'image' => $path98,
            'id_product' => '33',
            ],


            [
            'image' => $path99,
            'id_product' => '34',
            ],
    
            [
            'image' => $path100,
            'id_product' => '34',
            ],
    
            [
            'image' => $path101,
            'id_product' => '34',
            ],

            [
            'image' => $path102,
            'id_product' => '35',
            ],
    
            [
            'image' => $path103,
            'id_product' => '35',
            ],
    
            [
            'image' => $path104,
            'id_product' => '35',
            ],

            [
            'image' => $path105,
            'id_product' => '36',
            ],
    
            [
            'image' => $path106,
            'id_product' => '36',
            ],
    
            [
            'image' => $path107,
            'id_product' => '36',
            ],


            [
            'image' => $path108,
            'id_product' => '37',
            ],
    
            [
            'image' => $path109,
            'id_product' => '37',
            ],
    
            [
            'image' => $path110,
            'id_product' => '37',
            ],

            [
            'image' => $path111,
            'id_product' => '38',
            ],
    
            [
            'image' => $path112,
            'id_product' => '38',
            ],
    
            [
            'image' => $path113,
            'id_product' => '38',
            ],


            [
            'image' => $path114,
            'id_product' => '39',
            ],
    
            [
            'image' => $path115,
            'id_product' => '39',
            ],
    
            [
            'image' => $path116,
            'id_product' => '39',
            ],

            [
            'image' => $path117,
            'id_product' => '40',
            ],
    
            [
            'image' => $path118,
            'id_product' => '40',
            ],
    
            [
            'image' => $path119,
            'id_product' => '40',
            ],

            [
            'image' => $path120,
            'id_product' => '41',
            ],
    
            [
            'image' => $path121,
            'id_product' => '41',
            ],
    
            [
            'image' => $path122,
            'id_product' => '41',
            ],


            [
            'image' => $path123,
            'id_product' => '42',
            ],
    
            [
            'image' => $path124,
            'id_product' => '42',
            ],
    
            [
            'image' => $path125,
            'id_product' => '42',
            ],

            [
            'image' => $path126,
            'id_product' => '43',
            ],
    
            [
            'image' => $path127,
            'id_product' => '43',
            ],
    
            [
            'image' => $path128,
            'id_product' => '43',
            ],


            [
            'image' => $path129,
            'id_product' => '44',
            ],
    
            [
            'image' => $path130,
            'id_product' => '44',
            ],
    
            [
            'image' => $path131,
            'id_product' => '44',
            ],

            [
            'image' => $path132,
            'id_product' => '45',
            ],
    
            [
            'image' => $path133,
            'id_product' => '45',
            ],
    
            [
            'image' => $path134,
            'id_product' => '45',
            ],


            [
            'image' => $path135,
            'id_product' => '46',
            ],
    
            [
            'image' => $path136,
            'id_product' => '46',
            ],
    
            [
            'image' => $path137,
            'id_product' => '46',
            ],


            [
            'image' => $path138,
            'id_product' => '47',
            ],
    
            [
            'image' => $path139,
            'id_product' => '47',
            ],
    
            [
            'image' => $path140,
            'id_product' => '47',
            ],


            [
            'image' => $path141,
            'id_product' => '48',
            ],
    
            [
            'image' => $path142,
            'id_product' => '48',
            ],
    
            [
            'image' => $path143,
            'id_product' => '48',
            ],
    
        ];
        foreach ($image as $key => $value) {
            Image::create($value);
        }
        
 
    }
}
