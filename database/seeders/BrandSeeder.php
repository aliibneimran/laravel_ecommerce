<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [

            [
                'name' => 'Samsung',
                'logo' => 'https://dummyimage.com/200x300/000/fff&text=Samsung',
                'description' => 'Samsung Brand',
            ],

            [

                'name' => 'Apple',
                'logo' => 'https://dummyimage.com/200x300/000/fff&text=Iphone',
                'description' => 'Apple Brand',
            ],

            [

                'name' => 'Google',
                'logo' => 'https://dummyimage.com/200x300/000/fff&text=Google',
                'description' => 'Google Pixel Brand',
            ],

            [

                'name' => 'LG',
                'logo' => 'https://dummyimage.com/200x300/000/fff&text=LG',
                'description' => 'LG Brand',

            ]
        ];

  

        foreach ($brands as $key => $value) {
           Brand::create($value);
        }
    }
}
