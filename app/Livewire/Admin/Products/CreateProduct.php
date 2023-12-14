<?php

namespace App\Livewire\Admin\Products;

use App\Livewire\Forms\Admin\ProductForm;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\{Title, Layout};
use App\Models\{Category, Brand};
use App\Enums\ProductStatus;

#[Title('Create Product')]
class CreateProduct extends Component
{
    use WithFileUploads;

    public ProductForm $form;

    public array $categories;
    public array $brands;
    public array $productStatus;

    public function mount()
    {
        $this->categories = Category::all(['id', 'name'])->toArray();
        $this->brands = Brand::all(['id', 'name'])->toArray();
        $this->productStatus = ProductStatus::asArray();

        //dd($this->productStatus);
    }

    public function save()
    {
        $this->form->store();
        $this->redirect('/admin/products');
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.products.create-product');
    }
}
