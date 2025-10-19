<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;


class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement([
                'キウイ', 'ストロベリー', 'オレンジ', 'スイカ', 'ピーチ',
                'シャインマスカット', 'パイナップル', 'ブドウ', 'バナナ', 'メロン'
            ]),
            'price' => $this->faker->numberBetween(600, 1400),
            'description' => $this->faker->text(100),
            'image' => $this->faker->randomElement([
                'fruits-img/kiwi.png',
                'fruits-img/strawberry.png',
                'fruits-img/orange.png',
                'fruits-img/watermelon.png',
                'fruits-img/peach.png',
                'fruits-img/muscat.png',
                'fruits-img/pineapple.png',
                'fruits-img/grape.png',
                'fruits-img/banana.png',
                'fruits-img/melon.png',
            ]),
        ];
    }
}
