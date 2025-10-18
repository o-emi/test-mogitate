<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ImageUpload extends Component
{
      public $name;
      public $id;
      public $preview;
      public $filename;

    public function __construct()
    {

    }


    public function render()
    {
        return view('components.ImageUpload');
    }
}
