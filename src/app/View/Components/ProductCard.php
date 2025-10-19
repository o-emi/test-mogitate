<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductCard extends Component
{
    public $name;
    public $price;
    public $image;

      // テスト用確認データ
    public function __construct($name = 'テスト商品', $price = 1000)

    {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }


    public function render()
    {
        return view('components.product-card');
    }
}
