<div>
    <x-slot name="header">
        <div class="flex justify-between">
            <h1 class="text-3xl text-black pb-6">Edit Category</h1>
            <div class="flex">
                <x-button href="">Not active categories</x-button>
                <x-button href="" color="orange">Trashed categories</x-button>
            </div>
        </div>
    </x-slot>
    <form method="POST" wire:submit="save">

        <x-input label="Name *" name="name"/>
        <x-input label="Description *" name="description"/>
        <x-input label="Cover" name="cover"/>

        <x-admin.submit-button class="ms-5">
            {{ __('Save') }}
        </x-admin.submit-button>
    </form>
</div>
