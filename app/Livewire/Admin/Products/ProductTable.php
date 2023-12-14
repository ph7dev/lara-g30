<?php

namespace App\Livewire\Admin\Products;

use App\Livewire\Column;
use App\Livewire\Table;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;

class ProductTable extends Table
{
    public function query(): Builder
    {
        return Product::withoutTrashed();  //->where('status', '=', 0);
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
