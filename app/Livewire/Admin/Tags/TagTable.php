<?php


namespace App\Livewire\Admin\Tags;

use App\Livewire\Column;
use App\Livewire\Table;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Builder;

class TagTable extends Table
{

    public function query(): Builder
    {
        return Tag::query()->where('status', '=', 1);
    }

    public function columns(): array
    {
        return [
            Column::make('id', 'ID'),
            Column::make('name', 'Name'),
            Column::make('status', 'Status')->component('columns.status'),
            Column::make('created_at', 'Created')->component('columns.human-diff')
        ];
    }
}
