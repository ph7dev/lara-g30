<?php

namespace App\Livewire\Admin\Tags;

use Livewire\Component;
use Livewire\Attributes\{Layout, Title};

#[Title('Tag management')]
class TagList extends Component
{
    #[Layout('layouts.admin')]
    public function render()
    {
        return view('livewire.admin.tags.tag-list');
    }
}
