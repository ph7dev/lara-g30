<?php

namespace App\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

abstract class Table extends Component
{
    use WithPagination;

    //spa pagination for Livewire pages

    public int $perPage = 10;
    public int $page = 1;

    public $sortBy = '';
    public $sortDirection = 'asc';

    public abstract function query(): Builder;

    public abstract function columns(): array;

    public abstract function deleteItem(int $id);

    public abstract function editRoute(int $id): string;

    public function data()
    {
        return $this
            ->query()
            ->when($this->sortBy !== '', function ($query) {
                $query->orderBy($this->sortBy, $this->sortDirection);
            })
            ->paginate($this->perPage);
    }

    public function sort(string $key)
    {
        $this->resetPage(); //скидаемо налаштування пагінатора, щоб перемалювати сторінку

        if ($this->sortBy === $key) {
            $direction = $this->sortDirection === 'asc' ? 'desc' : 'asc';
            $this->sortDirection = $direction;
            return;
        }

        $this->sortBy = $key;
        $this->sortDirection = 'asc';
    }

    public function render()
    {
        return view('livewire.table');
    }
}
