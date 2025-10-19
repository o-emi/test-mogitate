<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Season;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $seasons = Season::all();

      Product::factory(10)->create()->each(function ($product) use ($seasons) {
            $product->seasons()->attach(
                $seasons->random(rand(1, 2))->pluck('id')->toArray()
            );
        });
    }
}
