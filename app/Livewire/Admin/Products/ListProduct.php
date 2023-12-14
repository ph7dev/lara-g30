<?php

namespace App\Livewire\Admin\Products;

use Livewire\Component;
use Livewire\Attributes\{Layout, Title};

#[Title('Products list')]
class ListProduct extends Component
{
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.products.list-product');
    }
}
