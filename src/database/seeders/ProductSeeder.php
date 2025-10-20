<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Season;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $seasons = Season::all();

        // 名前と画像を固定した配列
        $products = [
            ['name' => 'バナナ', 'image' => 'fruits-img/banana.png', 'price' => 500],
            ['name' => 'グレープ', 'image' => 'fruits-img/grapes.png', 'price' => 1000],
            ['name' => 'キウイ', 'image' => 'fruits-img/kiwi.png', 'price' => 800],
            ['name' => 'メロン', 'image' => 'fruits-img/melon.png', 'price' => 2500],
            ['name' => 'マスカット', 'image' => 'fruits-img/muscat.png', 'price' => 1800],
            ['name' => 'オレンジ', 'image' => 'fruits-img/orange.png', 'price' => 900],
            ['name' => 'ピーチ', 'image' => 'fruits-img/peach.png', 'price' => 2000],
            ['name' => 'パイナップル', 'image' => 'fruits-img/pineapple.png', 'price' => 1600],
            ['name' => 'ストロベリー', 'image' => 'fruits-img/strawberry.png', 'price' => 1300],
            ['name' => 'スイカ', 'image' => 'fruits-img/watermelon.png', 'price' => 3000],
        ];

        foreach ($products as $prod) {
            $product = Product::create([
                'name' => $prod['name'],
                'image' => $prod['image'],
                'price' => $prod['price'],
            ]);

            $product->seasons()->attach(
                $seasons->random(rand(1, 2))->pluck('id')->toArray()
            );
        }
    }
}
