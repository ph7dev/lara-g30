<x-admin-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-3xl text-black pb-6">Brands management</h2>
            <div class="flex">
                <a href="{{ route('brands.index') }}">
                    {{ __('Brand list') }}
                </a>
                <a href="{{ route('brands.create') }}">
                    <x-admin.primary-button>
                        {{ __('Create New brand') }}
                    </x-admin.primary-button>
                </a>
                <a href="{{ route('brands.edit', $brand->id) }}">
                    <x-admin.success-button>
                        {{ __('Edit') }}
                    </x-admin.success-button>
                </a>

                <form method="POST" class="inline-form" action="{{ route('brands.destroy', $brand->id) }}">
                    @csrf
                    @method('DELETE')
                    <x-admin.danger-button>
                        {{ __('Remove') }}
                    </x-admin.danger-button>
                </form>

            </div>
        </div>
    </x-slot>

    <div class="w-full mt-12">
        <p class="text-xl pb-3 flex items-center"><i class="fas fa-list mr-3"></i> All Brands</p>
        <div class="bg-white overflow-auto">
            <table class="min-w-full bg-white">
                <thead class="bg-blue-400 text-white">
                <tr>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold">Attribute</th>
                    <th class="w-2/3 text-left py-3 px-4 uppercase font-semibold">Value</th>
                </tr>
                </thead>
                <tbody class="text-gray-700">
                    <tr>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold">Id</th>
                        <td class="w-2/3 text-left py-3 px-4">{{ $brand->id }}</td>
                    </tr>

                    <tr>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold">Name</th>
                        <td class="w-2/3 text-left py-3 px-4">{{ $brand->name }}</td>
                    </tr>

                    <tr>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold">Country</th>
                        <td class="w-2/3 text-left py-3 px-4">{{ $brand->country }}</td>
                    </tr>

                    <tr>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold">Description</th>
                        <td class="w-2/3 text-left py-3 px-4">{{ $brand->description }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</x-admin-layout>
