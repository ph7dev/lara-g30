<div>
    Tags



    <x-slot name="header">
        <div class="flex justify-between">
            <h1 class="text-3xl text-black pb-6">Tag management</h1>
            <div class="flex">

                {{--Приклад використання кнопок TallstackUI--}}
                <x-button href="#">Create New tag</x-button>

                <x-toggle />


                <x-modal id="test123">
                    TallStackUi
                </x-modal>

                <x-button x-on:click="$modalOpen('test123')">
                    Open
                </x-button>

                <x-button x-on:click="$modalClose('test123')">
                    Close
                </x-button>


                <x-input prefix="https://" label="Domain" />
                <x-input suffix="@gmail.com" label="E-mail" />

                <x-dropdown text="Menu">
                    <x-slot:header>
                        <p>Welcome!</p>
                    </x-slot:header>
                    <x-dropdown.items icon="cog" text="Settings" />
                    <x-dropdown.items icon="arrow-left-on-rectangle" text="Logout" separator />
                </x-dropdown>
            </div>
        </div>
    </x-slot>


    <div class="flex flex-col min-w-0 flex-1 overflow-hidden">
        @livewire('admin.tags.tag-table')
    </div>
</div>
