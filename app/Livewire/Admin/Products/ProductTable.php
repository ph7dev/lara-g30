<?php

namespace App\Livewire\Admin\Products;

use App\Livewire\Column;
use App\Livewire\Table;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;

class ProductTable extends Table
{
    public string $searchQuery = '';

    public function query(): Builder
    {
        return Product::query()
            ->when(
                $this->searchQuery !== '',
                fn(Builder $query) => $query->where('name', 'like', "%{$this->searchQuery}%")
            );
    }

    public function updated($key):void
    {
        if ($key === 'searchQuery') {
            $this->resetPage();
        }
    }

    public function columns(): array
    {
        return [
            Column::make('name', 'Name'),
            Column::make('price', 'Price'),

            //Column::make('status', 'Status'),
            Column::make('status', 'Status')->component('columns.status'),

            //Column::make('created_at', 'Created At'),
            Column::make('created_at', 'Created At')->component('columns.human-diff'),
        ];
    }

    public function deleteItem(int $id)
    {
        $category = Product::query()->find($id);
        $category->delete();
    }

    public function editRoute(int $id): string
    {
        return route('products.update', $id);
    }
}
