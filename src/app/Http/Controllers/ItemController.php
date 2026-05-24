<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function show($id)
    {
        $items = $this->items();

        $item = $items[$id];

        return view('show', compact('item', 'id'));
    }

    public function purchase($id)
    {
        $items = $this->items();

        $item = $items[$id];

        return view('purchase', compact('item'));
    }

    private function items()
    {
        return [

            1 => [
                'name' => '腕時計',
                'brand' => 'COACH',
                'price' => '15000',
                'image' => 'Armani+Mens+Clock.jpg',
                'description' => 'スタイリッシュな腕時計です',
                'category' => ['ファッション', 'メンズ'],
                'condition' => '良好',
            ],

            2 => [
                'name' => 'HDD',
                'brand' => 'TOSHIBA',
                'price' => '5000',
                'image' => 'HDD+Hard+Disk.jpg',
                'description' => '高速で使いやすいHDDです',
                'category' => ['家電'],
                'condition' => '目立った傷や汚れなし',
            ],

            3 => [
                'name' => '玉ねぎ3束',
                'brand' => '農家直送',
                'price' => '300',
                'image' => 'iLoveIMG+d.jpg',
                'description' => '新鮮な玉ねぎです',
                'category' => ['キッチン'],
                'condition' => 'やや傷や汚れあり',
            ],

            4 => [
                'name' => '革靴',
                'brand' => 'REGAL',
                'price' => '4000',
                'image' => 'Leather+Shoes+Product+Photo.jpg',
                'description' => '高級感のある革靴です',
                'category' => ['ファッション'],
                'condition' => '状態が悪い',
            ],

            5 => [
                'name' => 'ノートPC',
                'brand' => 'DELL',
                'price' => '45000',
                'image' => 'Living+Room+Laptop.jpg',
                'description' => '高性能ノートパソコン',
                'category' => ['家電'],
                'condition' => '良好',
            ],

            6 => [
                'name' => 'マイク',
                'brand' => 'SONY',
                'price' => '8000',
                'image' => 'Music+Mic+4632231.jpg',
                'description' => '高音質マイクです',
                'category' => ['家電'],
                'condition' => '目立った傷や汚れなし',
            ],

            7 => [
                'name' => 'ショルダーバッグ',
                'brand' => 'GUCCI',
                'price' => '3500',
                'image' => 'Purse+fashion+pocket.jpg',
                'description' => 'おしゃれなバッグです',
                'category' => ['ファッション', 'レディース'],
                'condition' => 'やや傷や汚れあり',
            ],

            8 => [
                'name' => 'タンブラー',
                'brand' => 'STARBUCKS',
                'price' => '500',
                'image' => 'Tumbler+souvenir.jpg',
                'description' => '使いやすいタンブラー',
                'category' => ['キッチン'],
                'condition' => '状態が悪い',
            ],

            9 => [
                'name' => 'コーヒーミル',
                'brand' => 'Kalita',
                'price' => '4000',
                'image' => 'Waitress+with+Coffee+Grinder.jpg',
                'description' => '手動コーヒーミル',
                'category' => ['キッチン'],
                'condition' => '良好',
            ],

            10 => [
                'name' => 'メイクセット',
                'brand' => 'CHANEL',
                'price' => '2500',
                'image' => 'mekeup.jpg',
                'description' => '人気メイクセット',
                'category' => ['コスメ'],
                'condition' => '目立った傷や汚れなし',
            ],

        ];
    }
}