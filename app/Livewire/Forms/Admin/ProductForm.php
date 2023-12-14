<?php

namespace App\Livewire\Forms\Admin;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\{Product, Brand, Category};
use Illuminate\Support\Facades\Storage;

/**
 * Class ProductForm
 * @package App\Livewire\Forms\Admin
 *
 * @method toArray()
 */
class ProductForm extends Form
{
    public ?Product $product;

    #[Validate('required|min:5')]
    public $name;

    #[Validate('required')]
    public $price;

    #[Validate('required|min:5')]
    public $description;

    #[Validate('required|integer')]
    public $category_id;

    #[Validate('required|integer')]
    public $brand_id;

    #[Validate('required|integer')]
    public $status = 3;

    #[Validate('required|image|max:1024')]
    public $cover = '';

    public $oldCover = '';

    public function store()
    {
        $this->validate();
        $this->cover = $this->cover->store('products', 'public');
        Product::create($this->all());
    }

    public function update()
    {
        $this->validate();

        if ($this->cover->getClientOriginalName()) {
            //remove prev file if new file retrieved from form
            if ($this->oldCover !== null && Storage::disk('public')->exists($this->oldCover)) {
                Storage::disk('public')->delete($this->oldCover);
            }

            $this->cover = $this->cover->store('products', 'public');
        }

        $this->product->update($this->all());
    }

    public function setProduct(Product $product)
    {
        $this->product = $product;
        $this->name = $product->name;
        $this->price = $product->price;
        $this->description = $product->description;
        $this->status = $product->status;
        $this->category_id = $product->category_id;
        $this->brand_id = $product->brand_id;
        $this->cover = $product->cover;
        $this->oldCover = $product->cover;
    }
}
