<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['name'=>'Oppo mobile',
            'price'=>'10000',
            'description'=>'A smartphone with 8gb ram and much more features',
            'category'=>'mobile',
            'gallery'=>'https://5.imimg.com/data5/SELLER/Default/2021/1/HK/LE/LL/1073409/oppo-mobile-a9-2020-500x500.jpg'
        ],
        [
            'name'=>'Panasonic Tv',
            'price'=>'20000',
            'description'=>'A smart tv with  much more features',
            'category'=>'tv',
            'gallery'=>'https://i.gadgets360cdn.com/products/televisions/large/1548154609_832_panasonic_40-inch-led-full-hd-tv-th-40e400d.jpg'
            
        ],
        [
            'name'=>'Soni Tv',
            'price'=>'40000',
            'description'=>'A smart tv with  much more features',
            'category'=>'tv',
            'gallery'=>'https://m.media-amazon.com/images/I/81zeKI1IG9L._SL1500_.jpg'
            
        ],
        [
            'name'=>'LG fridge',
            'price'=>'70000',
            'description'=>'A fridge with  much more features',
            'category'=>'fridge',
            'gallery'=>'https://sathya.in/media/52872/catalog/lg-fridge-glb191krgx-5.png'
            
            ]
            
            ]);
    }
}
