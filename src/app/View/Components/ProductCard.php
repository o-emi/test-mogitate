<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductCard extends Component
{
    public $name;
    public $price;
    public $image;

      // テスト用確認データ
    public function __construct($name = 'テスト商品', $price = 1000, $image = null)

    {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image ?? asset('images/no-image.png');
    }


    public function render()
    {
        return view('components.product-card');
    }
}
