<div>
    Categories management

    <x-slot name="header">
        <div class="flex justify-between">
            <h1 class="text-3xl text-black pb-6">Categories management</h1>
            <div class="flex">

                {{--Приклад використання кнопок TallstackUI--}}
                <x-button href="#">Create New category</x-button>
                <x-button href="#" color="orange">Trashed brands</x-button>

                <x-toggle />

            </div>
        </div>
    </x-slot>


    <div class="flex flex-col min-w-0 flex-1 overflow-hidden">
        @livewire('admin.categories.category-table')
    </div>
</div>
