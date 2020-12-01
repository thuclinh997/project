<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('brands')->insert(
            [
                [
                    'name' => 'Samsung',
                    'image' => 'samsungnew-220x48-1.png'
                ],
                [
                    'name' => 'Iphone',
                    'image' => 'logo-iphone-220x48.png'
                ],
                [
                    'name' => 'Ipad',
                    'image' => 'iPad-(Apple)522-b_4.jpg'
                ],

                [
                    'name' => 'Lenovo',
                    'image' => 'logo-lenovo-149x40.png'
                ],
                [
                    'name' => 'Dell',
                    'image' => 'logo-dell-149x40.png'
                ],
                [
                    'name' => 'Asus',
                    'image' => 'logo-asus-149x40.png'
                ],
                [
                    'name' => 'Vsmart',
                    'image' => 'Vsmart42-b_40.png'
                ],
                [
                    'name' => 'Oppo',
                    'image' => 'OPPO42-b_5.jpg'
                ]
            ]
        );
    }
}
