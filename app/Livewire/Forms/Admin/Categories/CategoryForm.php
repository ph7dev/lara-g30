<?php

namespace App\Livewire\Forms\Admin\Categories;

use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Category;
use Livewire\WithFileUploads;

class CategoryForm extends Form
{
    public $category;

    #[Validate('required|min:5')]
    public $name = '';

    #[Validate('required|min:5')]
    public $description = '';

    #[Validate('required|boolean')]
    public $status = '';

    #[Validate('required|image|max:1024')]
    public $cover = '';

    public $oldCover;

    public function store()
    {
        $this->validate();
        $this->cover = $this->cover->store('categories', 'public');
        Category::create($this->all());
    }

    public function update()
    {
        $this->validate();

        if ($this->cover->getClientOriginalName()) {
            //remove prev file if new file retrieved from form
            if ($this->oldCover !== null && Storage::disk('public')->exists($this->oldCover)) {
                Storage::disk('public')->delete($this->oldCover);
            }

            $this->cover = $this->cover->store('categories', 'public');
        }

        $this->category->update($this->all());
    }

    public function setCategory(Category $category)
    {
        $this->category = $category;
        $this->name = $category->name;
        $this->description = $category->description;
        $this->status = $category->status;
        $this->oldCover = $category->cover;
    }
}
