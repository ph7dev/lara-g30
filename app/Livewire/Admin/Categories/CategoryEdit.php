<?php

namespace App\Livewire\Admin\Categories;

use App\Livewire\Forms\Admin\Categories\CategoryForm;
use App\Models\Category;
use Livewire\Component;
use Livewire\Attributes\{Layout, Title};
use Livewire\WithFileUploads;

#[Title('Edit Category')]
class CategoryEdit extends Component
{
    use WithFileUploads;

    public CategoryForm $form;

    public function mount(Category $category)
    {
        $this->form->setCategory($category);
    }

    public function save()
    {
        $this->form->update();
        return $this->redirect('/admin/categories');
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.categories.category-edit');
    }
}
