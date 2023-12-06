<?php

namespace App\Livewire\Admin\Categories;

use Livewire\Component;

#[Title('Categories list')]
class CategoryList extends Component
{
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.categories.category-list');
    }
}
