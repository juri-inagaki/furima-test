<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([            [                

    
                'name' => '腕時計',
                'price' => 15000,
                'brand_name' => '',
                'description' => 'スタイリッシュなデザインのメンズ腕時計',
                'condition_id' => 1,
                'image_path' => 'items/Armani+Mens+Clock.jpg',
                'user_id' => 1,
            ],
            [
                'name' => 'HDD',
                'price' => 5000,
                'brand_name' => '',
                'description' => '高速で信頼性の高いハードディスク',
                'condition_id' => 2,
                'image_path' => 'items/HDD+Hard+Disk.jpg',
                'user_id' => 1,
            ],
            [
                'name' => '玉ねぎ3束',
                'price' => 300,
                'brand_name' => '',
                'description' => '新鮮な玉ねぎ3束のセット',
                'condition_id' => 3,
                'image_path' => 'items/iLoveIMG+d.jpg',
                'user_id' => 1,
            ],
            [
                'name' => '革靴',
                'price' => 4000,
                'brand_name' => '',
                'description' => 'クラシックなデザインの革靴',
                'condition_id' => 4,
                'image_path' => 'Leather+Shoes+Product+Photo.jpg',
                'user_id' => 1,
            ],
            [
                'name' => 'ノートPC',
                'price' => 45000,
                'brand_name' => '',
                'description' => '高性能なノートパソコン',
                'condition_id' => 1,
                'image_path' => 'items/Living+Room+Laptop.jpg',
                'user_id' => 1,
            ],
            [
                'name' => 'マイク',
                'price' => 8000,
                'brand_name' => '',
                'description' => '高音質のレコーディング用マイク',
                'condition_id' => 2,
                'image_path' => 'Music+Mic+4632231.jpg',
                'user_id' => 1,
            ],
            [
                'name' => 'ショルダーバッグ',
                'price' => 3500,
                'brand_name' => '',
                'description' => 'おしゃれなショルダーバッグ',
                'condition_id' => 3,
                'image_path' => 'Purse+fashion+pocket.jpg',
                'user_id' => 1,
            ],
            [
                'name' => 'タンブラー',
                'price' => 500,
                'brand_name' => '',
                'description' => '使いやすいタンブラー',
                'condition_id' => 4,
                'image_path' => 'Tumbler+souvenir.jpg',
                'user_id' => 1,
            ],
            [
                'name' => 'コーヒーミル',
                'price' => 4000,
                'brand_name' => 'Starbacks',
                'description' => '手動のコーヒーミル',
                'condition_id' => 1,
                'image_path' => 'items/Waitress+with+Coffee+Grinder.jpg',
                'user_id' => 1,
            ],
            [
                'name' => 'メイクセット',
                'price' => 2500,
                'brand_name' => '',
                'description' => '便利なメイクアップセット',
                'condition_id' => 2,
                'image_path' => 'items/外出メイクアップセット.jpg',
                'user_id' => 1,
            ],
        ]);
    }
}