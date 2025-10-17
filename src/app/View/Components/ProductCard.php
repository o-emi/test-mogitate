<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductCard extends Component
{
      public $name;
    public $price;
    public $image;

    public function __construct($name, $price, $image)

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
