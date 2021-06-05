<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class CreateProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $product = [
            [
               'name'=>'Patterned dress',
               'quantity'=>'28',
               'prize'=>'79.99',
               'color'=>'Colorful',
               'size_of_product'=>'S',
               'description'=>'Height of female model: 180 cm. Round neck, short sleeves, ruffle hem.',
               'composition_and_conservation'=>'100% COTTON',
               'id_sub_category'=>1,
               'id_order' => 1,
            ],

            [
                'name'=>'Floral dress',
                'quantity'=>'20',
                'prize'=>'129.99',
                'color'=>'Colorful',
                'size_of_product'=>'M',
                'description'=>'Height of female model: 180 cm. Model wears size M/38. Classic collar and button-through front',
                'composition_and_conservation'=>'100% COTTON',
                'id_sub_category'=>'1',
                'id_promotion' => '',
                'id_order' => '2',    
            ],

            [
                'name'=>'Red dress',
                'quantity'=>'18',
                'prize'=>'69.99',
                'color'=>'Red',
                'size_of_product'=>'S',
                'description'=>'Height of female model: 178 cm. Model wears size S/36. ',
                'composition_and_conservation'=>'100% COTTON',
                'id_sub_category'=>'1',
                'id_promotion' => '',
                'id_order' => '3',
            ],
            
            [
                'name'=>'Jersey skirt',
                'quantity'=>'54',
                'prize'=>'79.99',
                'color'=>'Nude',
                'size_of_product'=>'XS',
                'description'=>'Height of female model: 180 cm. Ruffle hem and midi length',
                'composition_and_conservation'=>'52% VISCOSE, 48% POLYAMIDE',
                'id_sub_category'=>'2',
                'id_promotion' => '',
                'id_order' => '',
             ],
 
             [
                 'name'=>'Nude skirt',
                 'quantity'=>'20',
                 'prize'=>'49.99',
                 'color'=>'Beige',
                 'size_of_product'=>'M',
                 'description'=>'Height of female model: 178 cm. ECO AWARE. Midi length',
                 'composition_and_conservation'=>'100% POLYESTER',
                 'id_sub_category'=>'2',
                 'id_promotion' => '3',
                 'id_order' => '',
             ],
 
             [
                 'name'=>'Patterned mini skirt',
                 'quantity'=>'20',
                 'prize'=>'49.99',
                 'color'=>'Cream',
                 'size_of_product'=>'S',
                 'description'=> 'Height of female model: 178 cm. Model wears size S/36. Concealed side zip fastening',
                 'composition_and_conservation' => '97% POLYESTER, 3% ELASTANE',
                 'id_sub_category'=>'2',
                 'id_promotion' => '4',
                 'id_order' => '',
             ],

             [
                'name'=>'Cotton T-shirt',
                'quantity'=>'30',
                'prize'=>'29.99',
                'color'=>'White',
                'size_of_product'=>'S',
                'description'=> 'Height of female model: 178 cm. Model wears size S/36.' ,
                'composition_and_conservation'=> '100% COTTON',
                'id_sub_category'=>'3',
                'id_promotion' => '',
                'id_order' => '',
            ],

            [
                'name'=>'T-shirt in organic cotton',
                'quantity'=>'24',
                'prize'=>'29.99',
                'color'=>'Black',
                'size_of_product'=>'S',
                'description'=> 'Height of female model: 178 cm. Model wears size S/36. V neck, short sleeves.' ,
                'composition_and_conservation'=> '100% COTTON',
                'id_sub_category'=>'3',
                'id_promotion' => '',
                'id_order' => '',
            ],

            [
                'name'=>'Cotton T-shirt with print',
                'quantity'=>'43',
                'prize'=>'29.99',
                'color'=>'Mauve',
                'size_of_product'=>'S',
                'description'=> 'Height of female model: 176 cm. Model wears size S/36.' ,
                'composition_and_conservation'=> '100% COTTON',
                'id_sub_category'=>'3',
                'id_promotion' => '',
                'id_order' => '',
            ],


            [
                'name'=>'Boyfriend jeans',
                'quantity'=>'21',
                'prize'=>'129.99',
                'color'=>'Blue',
                'size_of_product'=>'S',
                'description'=> 'Height of female model: 175 cm. Model wears size S/36. Zip and button fastening and five pockets' ,
                'composition_and_conservation'=> '100% COTTON',
                'id_sub_category'=>'4',
                'id_promotion' => '',
                'id_order' => '',
            ],

            [
                'name'=>'Mom slim jeans',
                'quantity'=>'31',
                'prize'=>'119.99',
                'color'=>'White',
                'size_of_product'=>'S',
                'description'=> 'Height of female model: 174 cm. Model wears size S/36.' ,
                'composition_and_conservation'=> '98% COTTON, 2% ELASTANE',
                'id_sub_category'=>'4',
                'id_promotion' => '',
                'id_order' => '',
            ],

            [
                'name'=>'Straight jeans',
                'quantity'=>'64',
                'prize'=>'149.99',
                'color'=>'Black',
                'size_of_product'=>'S',
                'description'=> 'Height of female model: 178 cm. Model wears size S/36. Five pockets' ,
                'composition_and_conservation'=> '100% COTTON',
                'id_sub_category'=>'4',
                'id_promotion' => '',
                'id_order' => '',
            ],

            //MEN

            [
                'name'=>'Cotton T-shirt',
                'quantity'=>'34',
                'prize'=>'19.99',
                'color'=>'Black',
                'size_of_product'=>'M',
                'description'=> 'Round neck and short sleeves', 
                'composition_and_conservation'=> '100% COTTON',
                'id_sub_category'=>'5',
                'id_promotion' => '2',
                'id_order' => '',
            ],

            [
                'name'=>'Abstract print T-shirt',
                'quantity'=>'44',
                'prize'=>'49.99',
                'color'=>'Cream',
                'size_of_product'=>'M',
                'description'=> 'Round neck and short sleeves' ,
                'composition_and_conservation'=> '100% COTTON',
                'id_sub_category'=>'5',
                'id_promotion' => '',
                'id_order' => '',
            ],


            [
                'name'=>'Cotton top',
                'quantity'=>'24',
                'prize'=>'15.99',
                'color'=>'Pink',
                'size_of_product'=>'L',
                'description'=> 'Round neck with trimming and wide straps',
                'composition_and_conservation'=> '100% COTTON',
                'id_sub_category'=>'5',
                'id_promotion' => '',
                'id_order' => '',
            ],

            [
                'name'=>'Classic design basic sweatshirt',
                'quantity'=>'65',
                'prize'=>'89.99',
                'color'=>'Beige',
                'size_of_product'=>'M',
                'description'=> 'Model’s height: 190 cm. Model wears size M. Round ribbed neckline, subtly dropped shoulders, long sleeves',
                'composition_and_conservation'=> '70% COTTON, 30% POLYESTER',
                'id_sub_category'=>'6',
                'id_promotion' => '',
                'id_order' => '',
            ],

            [
                'name'=>'Organic cotton zip up hoodie',
                'quantity'=>'67',
                'prize'=>'89.99',
                'color'=>'Black',
                'size_of_product'=>'M',
                'description'=> 'Wide hood, zip fastening, open front pockets, long sleeves, ribbed neckline, hemline and cuffs',
                'composition_and_conservation'=> '100% COTTON',
                'id_sub_category'=>'6',
                'id_promotion' => '',
                'id_order' => '',
            ],

            [
                'name'=>'Hoodie',
                'quantity'=>'37',
                'prize'=>'89.99',
                'color'=>'Anthracite',
                'size_of_product'=>'M',
                'description'=> 'Large hood, long sleeves with ribbed trim, dropped shoulders',
                'composition_and_conservation'=> '80% COTTON, 20% POLYESTER',
                'id_sub_category'=>'6',
                'id_promotion' => '',
                'id_order' => '',
            ],



            [
                'name'=>'MEN`S JEANS TROUSERS',
                'quantity'=>'64',
                'prize'=>'199.99',
                'color'=>'Navy',
                'size_of_product'=>'L',
                'description'=> 'Zip and button fastening, open front pockets, back patch pockets, long fitted leg',
                'composition_and_conservation'=> '98% COTTON, 2% ELASTANE',
                'id_sub_category'=>'7',
                'id_promotion' => '',
                'id_order' => '',
            ],

            [
                'name'=>'MEN`S JEANS TROUSERS',
                'quantity'=>'21',
                'prize'=>'149.99',
                'color'=>'Blue',
                'size_of_product'=>'L',
                'description'=> 'Zip and button fastening, open front pockets, back patch pockets',
                'composition_and_conservation'=> '99% COTTON, 1% ELASTANE',
                'id_sub_category'=>'7',
                'id_promotion' => '',
                'id_order' => '',
            ],

            [
                'name'=>'MEN`S JEANS TROUSERS',
                'quantity'=>'21',
                'prize'=>'149.99',
                'color'=>'Blue',
                'size_of_product'=>'L',
                'description'=> 'Zip and button fastening, open front pockets, back patch pockets',
                'composition_and_conservation'=> '99% COTTON, 1% ELASTANE',
                'id_sub_category'=>'7',
                'id_promotion' => '',
                'id_order' => '',
            ],


            [
                'name'=>'Basic sweat shorts',
                'quantity'=>'31',
                'prize'=>'79.99',
                'color'=>'Black',
                'size_of_product'=>'M',
                'description'=> 'Model’s height: 190 cm. Model wears size 32. Two pockets in side seams',
                'composition_and_conservation'=> '60% COTTON, 40% POLYESTER',
                'id_sub_category'=>'8',
                'id_promotion' => '',
                'id_order' => '',
            ],

            [
                'name'=>'Basic sweat shorts',
                'quantity'=>'31',
                'prize'=>'79.99',
                'color'=>'Black',
                'size_of_product'=>'M',
                'description'=> 'Model’s height: 190 cm. Model wears size 32. Two pockets in side seams',
                'composition_and_conservation'=> '60% COTTON, 40% POLYESTER',
                'id_sub_category'=>'8',
                'id_promotion' => '',
                'id_order' => '',
            ],

            [
                'name'=>'PREMIUM organic cotton shorts',
                'quantity'=>'41',
                'prize'=>'99.99',
                'color'=>'Green',
                'size_of_product'=>'M',
                'description'=> 'Model’s height: 190 cm. Model wears size 32. Two pockets in side seams, patch pocket to the back.',
                'composition_and_conservation'=> '100% COTTON',
                'id_sub_category'=>'8',
                'id_promotion' => '',
                'id_order' => '',
            ],

            //girls

            [
                'name'=>'Colorful dress',
                'quantity'=>'21',
                'prize'=>'64.99',
                'color'=>'Multicolor',
                'size_of_product'=>'XS',
                'description'=> 'Round neck, wide straps and fitted waist',
                'composition_and_conservation'=> '100% COTTON',
                'id_sub_category'=>'9',
                'id_promotion' => '',
                'id_order' => '',
            ],

            [
                'name'=>'Girls` dress',
                'quantity'=>'53',
                'prize'=>'74.99',
                'color'=>'Lavender',
                'size_of_product'=>'XS',
                'description'=> 'Wide straps, 100% organic cotton.',
                'composition_and_conservation'=> '100% COTTON.',
                'id_sub_category'=>'9',
                'id_promotion' => '',
                'id_order' => '',
            ],

            [
                'name'=>'Frilled dress',
                'quantity'=>'51',
                'prize'=>'49.99',
                'color'=>'Multicolor',
                'size_of_product'=>'XS',
                'description'=> 'Round neck, wide straps and fitted waist.',
                'composition_and_conservation'=> '100% COTTON.',
                'id_sub_category'=>'9',
                'id_promotion' => '',
                'id_order' => '',
            ],

            [
                'name'=>'Pleated skirt',
                'quantity'=>'22',
                'prize'=>'109.99',
                'color'=>'Rose',
                'size_of_product'=>'XS',
                'description'=> 'Elasticated waist, midi length, smooth lining.',
                'composition_and_conservation'=> '65% POLYESTER, 35% COTTON.',
                'id_sub_category'=>'10',
                'id_promotion' => '',
                'id_order' => '',
            ],

            [
                'name'=>'Denim mini skirt',
                'quantity'=>'12',
                'prize'=>'89.99',
                'color'=>'Blue',
                'size_of_product'=>'XS',
                'description'=> 'Zip and button fastening three pockets.',
                'composition_and_conservation'=> '100% COTTON.',
                'id_sub_category'=>'10',
                'id_promotion' => '',
                'id_order' => '',
            ],

            [
                'name'=>'Knitted skirt',
                'quantity'=>'22',
                'prize'=>'39.99',
                'color'=>'Blue',
                'size_of_product'=>'XS',
                'description'=> 'Elasticated waist.',
                'composition_and_conservation'=> '71% POLYESTER, 26% VISCOSE, 3% ELASTANE.',
                'id_sub_category'=>'10',
                'id_promotion' => '',
                'id_order' => '',
            ],

            [
                'name'=>'T-shirt in organic cotton',
                'quantity'=>'42',
                'prize'=>'29.99',
                'color'=>'White',
                'size_of_product'=>'XS',
                'description'=> 'Round neck with trimming short sleeves',
                'composition_and_conservation'=> '100% COTTON.',
                'id_sub_category'=>'11',
                'id_promotion' => '',
                'id_order' => '',
            ],

            [
                'name'=>'Printed t-shirt',
                'quantity'=>'22',
                'prize'=>'19.99',
                'color'=>'Black',
                'size_of_product'=>'XS',
                'description'=> 'Round neck, short sleeves',
                'composition_and_conservation'=> '100% COTTON.',
                'id_sub_category'=>'11',
                'id_promotion' => '',
                'id_order' => '',
            ],


            [
                'name'=>'Printed t-shirt',
                'quantity'=>'21',
                'prize'=>'39.99',
                'color'=>'Violet',
                'size_of_product'=>'XS',
                'description'=> 'Round neck with trimming, short sleeves',
                'composition_and_conservation'=> '100% COTTON.',
                'id_sub_category'=>'11',
                'id_promotion' => '',
                'id_order' => '',
            ],

            [
                'name'=>'Patterned leggings',
                'quantity'=>'54',
                'prize'=>'49.99',
                'color'=>'Black',
                'size_of_product'=>'XS',
                'description'=> 'Elasticated waist, long fitted leg',
                'composition_and_conservation'=> '95% COTTON, 5% ELASTANE.',
                'id_sub_category'=>'12',
                'id_promotion' => '',
                'id_order' => '',
            ],

            [
                'name'=>'Cargo trousers',
                'quantity'=>'24',
                'prize'=>'89.99',
                'color'=>'Pink',
                'size_of_product'=>'XS',
                'description'=> 'Long fitted leg',
                'composition_and_conservation'=> '100% LYOCELL.',
                'id_sub_category'=>'12',
                'id_promotion' => '',
                'id_order' => '',
            ],

            [
                'name'=>'Culotte trousers',
                'quantity'=>'14',
                'prize'=>'69.99',
                'color'=>'Black',
                'size_of_product'=>'XS',
                'description'=> '-',
                'composition_and_conservation'=> '100% POLYSTER.',
                'id_sub_category'=>'12',
                'id_promotion' => '',
                'id_order' => '',
            ],

            [
                'name'=>'T-shirt with 3D print',
                'quantity'=>'25',
                'prize'=>'29.99',
                'color'=>'Orange',
                'size_of_product'=>'XS',
                'description'=> 'Round ribbed neckline, dropped shoulders, short sleeves, decorative sleeve patch',
                'composition_and_conservation'=> '100% POLYSTER.',
                'id_sub_category'=>'13',
                'id_promotion' => '',
                'id_order' => '',
            ],

            
            [
                'name'=>'BOYS` T-SHIRT',
                'quantity'=>'45',
                'prize'=>'19.99',
                'color'=>'Violet',
                'size_of_product'=>'XS',
                'description'=> 'Round neck with trimming, short sleeves, slightly dropped shoulders',
                'composition_and_conservation'=> ' 100% COTTON.',
                'id_sub_category'=>'13',
                'id_promotion' => '',
                'id_order' => '',
            ],

            [
                'name'=>'Cotton T-shirt with script',
                'quantity'=>'28',
                'prize'=>'24.99',
                'color'=>'Ligh turquoise',
                'size_of_product'=>'XS',
                'description'=> 'Round neck with trimming, short sleeves.',
                'composition_and_conservation'=> ' 100% COTTON.',
                'id_sub_category'=>'13',
                'id_promotion' => '',
                'id_order' => '',
            ],

            [
                'name'=>'Hoodie with print',
                'quantity'=>'48',
                'prize'=>'69.99',
                'color'=>'Ligh yellow',
                'size_of_product'=>'XS',
                'description'=> 'Round neck with trimming, dropped shoulders, ribbed hemline and cuffs.',
                'composition_and_conservation'=> '77% POLYESTER, 18% VISCOSE, 5% ELASTANE.',
                'id_sub_category'=>'14',
                'id_promotion' => '',
                'id_order' => '',
            ],

            [
                'name'=>'Hoodie with SpiderMan',
                'quantity'=>'54',
                'prize'=>'99.99',
                'color'=>'Grey',
                'size_of_product'=>'XS',
                'description'=> 'Long sleeves, two side sewn-in pockets, dropped shoulders, ribbed neckline, hemline and cuffs.',
                'composition_and_conservation'=> '80% COTTON, 20% POLYESTER.',
                'id_sub_category'=>'14',
                'id_promotion' => '',
                'id_order' => '',
            ],

            [
                'name'=>'Sweatshirt with print',
                'quantity'=>'24',
                'prize'=>'59.99',
                'color'=>'White',
                'size_of_product'=>'XS',
                'description'=> 'Two side sewn-in pockets, ribbed neckline, hemline and cuffs.',
                'composition_and_conservation'=> '80% COTTON, 20% POLYESTER.',
                'id_sub_category'=>'14',
                'id_promotion' => '',
                'id_order' => '',
            ],

            [
                'name'=>'Cotton rich joggers',
                'quantity'=>'14',
                'prize'=>'99.99',
                'color'=>'Gray',
                'size_of_product'=>'XS',
                'description'=> 'Elasticated waist.',
                'composition_and_conservation'=> '75% POLYESTER, 25% COTTON.',
                'id_sub_category'=>'15',
                'id_promotion' => '',
                'id_order' => '',
            ],

            [
                'name'=>'Cotton joggers with pockets',
                'quantity'=>'21',
                'prize'=>'79.99',
                'color'=>'Green',
                'size_of_product'=>'XS',
                'description'=> 'Elasticated waist.',
                'composition_and_conservation'=> '100% COTTON.',
                'id_sub_category'=>'15',
                'id_promotion' => '',
                'id_order' => '',
            ],

            [
                'name'=>'Sweatpants',
                'quantity'=>'54',
                'prize'=>'49.99',
                'color'=>'Navy',
                'size_of_product'=>'XS',
                'description'=> 'Elasticated waist.',
                'composition_and_conservation'=> '70% COTTON, 30% POLYESTER.',
                'id_sub_category'=>'15',
                'id_promotion' => '',
                'id_order' => '',
            ],

            [
                'name'=>'Elegant shirt',
                'quantity'=>'22',
                'prize'=>'54.99',
                'color'=>'Pale blue',
                'size_of_product'=>'XS',
                'description'=> 'Long sleeves, classic collar, button-through front, button cuffs.',
                'composition_and_conservation'=> ' 98% COTTON, 2% ELASTANE.',
                'id_sub_category'=>'16',
                'id_promotion' => '',
                'id_order' => '',
            ],


            [
                'name'=>'Elegant white shirt',
                'quantity'=>'19',
                'prize'=>'64.99',
                'color'=>'White',
                'size_of_product'=>'XS',
                'description'=> 'Long sleeves, classic collar, button-through front, button cuffs.',
                'composition_and_conservation'=> ' 98% COTTON, 2% ELASTANE.',
                'id_sub_category'=>'16',
                'id_promotion' => '',
                'id_order' => '',
            ],

            [
                'name'=>'Denim shirt',
                'quantity'=>'19',
                'prize'=>'34.99',
                'color'=>'Blue',
                'size_of_product'=>'XS',
                'description'=> 'Long sleeves, classic collar, button-through front, button cuffs.',
                'composition_and_conservation'=> ' 98% COTTON, 2% ELASTANE.',
                'id_sub_category'=>'16',
                'id_promotion' => '',
                'id_order' => '',
            ],

        ];
        foreach ($product as $key => $value) {
            Product::create($value);
        }
    }
}
