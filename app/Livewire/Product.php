<?php

namespace App\Livewire;

use Livewire\Component;

class Product extends Component
{
    public $products;

    public function render()
    {
        $this->products = \App\Models\Product::latest('id')->get();

        return view('livewire.product');
    }
}
