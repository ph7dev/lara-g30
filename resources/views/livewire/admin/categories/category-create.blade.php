<div>
    <x-slot name="header">
        <div class="flex justify-between">
            <h1 class="text-3xl text-black pb-6">Create New Category</h1>
            <div class="flex">
                <x-button href="">Not active categories</x-button>
                <x-button href="" color="orange">Trashed categories</x-button>
            </div>
        </div>
    </x-slot>

    <x-errors title="Ops! There are :count validation errors:" color="orange" />
    <form method="POST" wire:submit="save"> {{--save - це метод у компоненті app/Livewire/Admin/Categories/CategoryCreate.php --}}
        <div class="mt-4">
            <x-input label="Name *" name="name" wire:model="form.name"/>
        </div>
        <div class="mt-4">
            <x-textarea name="description" label="Description" wire:model="form.description"/>
        </div>

        <div class="mt-4">
            <x-toggle name="status" position="left" label="Status" wire:model="form.status"/>
        </div>

        <div class="flex items-center justify-center w-full  mt-4">

            <label for="dropzone-file" class="flex items-center justify-between w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">

                <div class="flex-1 flex-col items-center pt-5 pb-6">
                    @if($form->cover)
                        <img src="{{ $form->cover->temporaryUrl() }}" class="object-cover h-60" alt="uploaded-img">
                    @endif
                </div>

                <div class="flex-1 flex-col items-center pt-5 pb-6">

                    <svg class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                </div>

                <input id="dropzone-file" type="file" class="hidden" wire:model="form.cover" />
            </label>
        </div>

        <div class="mt-4 text-left">
            <x-button text="Save" class="ms-5" type="submit" color="emerald"/>
        </div>
    </form>
</div>
