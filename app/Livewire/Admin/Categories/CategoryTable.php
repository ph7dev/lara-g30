<?php

namespace App\Livewire\Admin\Categories;

use App\Livewire\Column;
use App\Livewire\Table;
use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;

class CategoryTable extends Table
{
    public function query(): Builder
    {
        return Category::withoutTrashed();  //->where('status', '=', 0);
    }

    public function columns(): array
    {
        return [
            Column::make('name', 'Name'),

            //Column::make('status', 'Status'),
            Column::make('status', 'Status')->component('columns.status'),

            //Column::make('created_at', 'Created At'),
            Column::make('created_at', 'Created At')->component('columns.human-diff'),
        ];
    }
}
