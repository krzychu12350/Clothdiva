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

        $path = 'images/women/dress_A_1';
        $path1 = 'images/women/dress_A_2';
        $path2 = 'images/women/dress_A_3';

        $path3 = 'images/women/dress_B_1';
        $path4 = 'images/women/dress_B_2';
        $path5 = 'images/women/dress_B_3';

        $path6 = 'images/women/dress_C_1';
        $path7 = 'images/women/dress_C_2';
        $path8 = 'images/women/dress_C_3';

        $path9 = 'images/women/skirt_A_1';
        $path10 = 'images/women/skirt_A_2';
        $path11 = 'images/women/skirt_A_3';

        $path12 = 'images/women/skirt_B_1';
        $path13 = 'images/women/skirt_B_2';
        $path14 = 'images/women/skirt_B_3';

        $path15 = 'images/women/skirt_C_1';
        $path16 = 'images/women/skirt_C_2';
        $path17 = 'images/women/skirt_C_3';

        $path18 = 'images/women/tshirt_A_1';
        $path19 = 'images/women/tshirt_A_2';
        $path20 = 'images/women/tshirt_A_3';

        $path21 = 'images/women/tshirt_B_1';
        $path22 = 'images/women/tshirt_B_2';
        $path23 = 'images/women/tshirt_B_3';

        $path24 = 'images/women/tshirt_C_1';
        $path25 = 'images/women/tshirt_C_2';
        $path26 = 'images/women/tshirt_C_3';

        $path27 = 'images/women/tshirt_A_1';
        $path28 = 'images/women/tshirt_A_2';
        $path29 = 'images/women/tshirt_A_3';

        $path30 = 'images/women/jeans_B_1';
        $path31 = 'images/women/jeans_B_2';
        $path32 = 'images/women/jeans_B_3';

        $path33 = 'images/women/jeans_C_1';
        $path34 = 'images/women/jeans_C_2';
        $path35 = 'images/women/jeans_C_3';

        //MEN

        $path36 = 'images/men/shirt_A_1';
        $path37 = 'images/men/shirt_A_2';
        $path38 = 'images/men/shirt_A_3';

        $path39 = 'images/men/shirt_B_1';
        $path40 = 'images/men/shirt_B_2';
        $path41 = 'images/men/shirt_B_3';

        $path42 = 'images/men/shirt_C_1';
        $path43 = 'images/men/shirt_C_2';
        $path44 = 'images/men/shirt_C_3';

        $path45 = 'images/men/hoodie_A_1';
        $path46 = 'images/men/hoodie_A_2';
        $path47 = 'images/men/hoodie_A_3';

        $path48 = 'images/men/hoodie_B_1';
        $path49 = 'images/men/hoodie_B_2';
        $path50 = 'images/men/hoodie_B_3';

        $path51 = 'images/men/hoodie_C_1';
        $path52 = 'images/men/hoodie_C_2';
        $path53 = 'images/men/hoodie_C_3';

        $path54 = 'images/men/jeans_A_1';
        $path55 = 'images/men/jeans_A_2';
        $path56 = 'images/men/jeans_A_3';

        $path57 = 'images/men/jeans_B_1';
        $path58 = 'images/men/jeans_B_2';
        $path59 = 'images/men/jeans_B_3';

        $path60 = 'images/men/jeans_C_1';
        $path61 = 'images/men/jeans_C_2';
        $path62 = 'images/men/jeans_C_3';

        $path63 = 'images/men/shorts_A_1';
        $path64 = 'images/men/shorts_A_2';
        $path65 = 'images/men/shorts_A_3';

        $path66 = 'images/men/shorts_B_1';
        $path67 = 'images/men/shorts_B_2';
        $path68 = 'images/men/shorts_B_3';

        $path69 = 'images/men/shorts_C_1';
        $path70 = 'images/men/shorts_C_2';
        $path71 = 'images/men/shorts_C_3';

        //GIRLS

        $path72 = 'images/girls/dress_A_1';
        $path73 = 'images/girls/dress_A_2';
        $path74 = 'images/girls/dress_A_3';

        $path75 = 'images/girls/dress_B_1';
        $path76 = 'images/girls/dress_B_2';
        $path77 = 'images/girls/dress_B_3';

        $path78 = 'images/girls/dress_C_1';
        $path79 = 'images/girls/dress_C_2';
        $path80 = 'images/girls/dress_C_3';

        $path81 = 'images/girls/skirt_A_1';
        $path82 = 'images/girls/skirt_A_2';
        $path83 = 'images/girls/skirt_A_3';

        $path84 = 'images/girls/skirt_B_1';
        $path85 = 'images/girls/skirt_B_2';
        $path86 = 'images/girls/skirt_B_3';

        $path87 = 'images/girls/skirt_C_1';
        $path88 = 'images/girls/skirt_C_2';
        $path89 = 'images/girls/skirt_C_3';

        $path90 = 'images/girls/shirt_A_1';
        $path91 = 'images/girls/shirt_A_2';
        $path92 = 'images/girls/shirt_A_3';

        $path93 = 'images/girls/shirt_B_1';
        $path94 = 'images/girls/shirt_B_2';
        $path95 = 'images/girls/shirt_B_3';

        $path96 = 'images/girls/shirt_C_1';
        $path97 = 'images/girls/shirt_C_2';
        $path98 = 'images/girls/shirt_C_3';

        $path99  = 'images/girls/trousers_A_1';
        $path100 = 'images/girls/trousers_A_2';
        $path101 = 'images/girls/trousers_A_3';

        $path102 = 'images/girls/trousers_B_1';
        $path103 = 'images/girls/trousers_B_2';
        $path104 = 'images/girls/trousers_B_3';

        $path105 = 'images/girls/trousers_C_1';
        $path106 = 'images/girls/trousers_C_2';
        $path107 = 'images/girls/trousers_C_3';

        //boys

        $path108 = 'images/boys/tshirt_A_1';
        $path109 = 'images/boys/tshirt_A_2';
        $path110 = 'images/boys/tshirt_A_3';

        $path111 = 'images/boys/tshirt_B_1';
        $path112 = 'images/boys/tshirt_B_2';
        $path113 = 'images/boys/tshirt_B_3';

        $path114 = 'images/boys/tshirt_C_1';
        $path115 = 'images/boys/tshirt_C_2';
        $path116 = 'images/boys/tshirt_C_3';

        $path117 = 'images/boys/hoodie_A_1';
        $path118 = 'images/boys/hoodie_A_2';
        $path119 = 'images/boys/hoodie_A_3';

        $path120 = 'images/boys/hoodie_B_1';
        $path121 = 'images/boys/hoodie_B_2';
        $path122 = 'images/boys/hoodie_B_3';

        $path123 = 'images/boys/hoodie_C_1';
        $path124 = 'images/boys/hoodie_C_2';
        $path125 = 'images/boys/hoodie_C_3';

        $path126 = 'images/boys/trousers_A_1';
        $path127 = 'images/boys/trousers_A_2';
        $path128 = 'images/boys/trousers_A_3';

        $path129 = 'images/boys/trousers_B_1';
        $path130 = 'images/boys/trousers_B_2';
        $path131 = 'images/boys/trousers_B_3';

        $path132 = 'images/boys/trousers_C_1';
        $path133 = 'images/boys/trousers_C_2';
        $path134 = 'images/boys/trousers_C_3';

        $path135 = 'images/boys/shirt_A_1';
        $path136 = 'images/boys/shirt_A_2';
        $path137 = 'images/boys/shirt_A_3';

        $path138 = 'images/boys/shirt_B_1';
        $path139 = 'images/boys/shirt_B_2';
        $path140 = 'images/boys/shirt_B_3';

        $path141 = 'images/boys/shirt_C_1';
        $path142 = 'images/boys/shirt_C_2';
        $path143 = 'images/boys/shirt_C_3';


        $path144 = 'images/women/dress_D_1';
        $path145 = 'images/women/dress_D_2';
        $path146 = 'images/women/dress_D_3';

        $path147 = 'images/women/dress_E_1';
        $path148 = 'images/women/dress_E_2';
        $path149 = 'images/women/dress_E_3';

        $path150 = 'images/women/dress_F_1';
        $path151 = 'images/women/dress_F_2';
        $path152 = 'images/women/dress_F_3';

        $path153 = 'images/women/dress_G_1';
        $path154 = 'images/women/dress_G_2';
        $path155 = 'images/women/dress_G_3';

        $path156 = 'images/women/dress_H_1';
        $path157 = 'images/women/dress_H_2';
        $path158 = 'images/women/dress_H_3';

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


            [
            'image' => $path144,
            'id_product' => '49',
            ],
    
            [
            'image' => $path145,
            'id_product' => '49',
            ],
    
            [
            'image' => $path146,
            'id_product' => '49',
            ],


            [     
            'image' => $path147,
            'id_product' => '50',
            ],
    
            [
            'image' => $path148,
            'id_product' => '50',
            ],
    
            [
            'image' => $path149,
            'id_product' => '50',
            ],
            

            [     
            'image' => $path150,
            'id_product' => '51',
            ],
    
            [
            'image' => $path151,
            'id_product' => '51',
            ],
    
            [
            'image' => $path152,
            'id_product' => '51',
            ],


            [     
            'image' => $path153,
            'id_product' => '52',
            ],
    
            [
            'image' => $path154,
            'id_product' => '52',
            ],
    
            [
            'image' => $path155,
            'id_product' => '52',
            ],


            [     
            'image' => $path156,
            'id_product' => '53',
            ],
    
            [
            'image' => $path157,
            'id_product' => '53',
            ],
    
            [
            'image' => $path158,
            'id_product' => '53',
            ],
    
        ];
        foreach ($image as $key => $value) {
            Image::create($value);
        }
        
 
    }
}
