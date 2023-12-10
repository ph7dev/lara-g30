<?php

namespace App\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

abstract class Table extends Component
{
    use WithPagination; //spa pagination for Livewire pages

    public int $perPage = 10;
    public int $page = 1;

    public abstract function query(): Builder;

    public abstract function columns(): array;

    public function data()
    {
        return $this->query()->paginate($this->perPage);
    }

    public function render()
    {
        return view('livewire.table');
    }
}
