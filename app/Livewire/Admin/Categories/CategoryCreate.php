<?php

namespace App\Livewire\Admin\Categories;

use Livewire\Component;
use Livewire\Attributes\{Layout, Title};
use App\Livewire\Forms\Admin\Categories\CategoryForm;
use Livewire\WithFileUploads;

#[Title('Create new Category')]
class CategoryCreate extends Component
{
    use WithFileUploads;

    public CategoryForm $form;

    public function save()
    {
        $this->form->store();
        return $this->redirect('/admin/categories');
    }

    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.categories.category-create');
    }
}
