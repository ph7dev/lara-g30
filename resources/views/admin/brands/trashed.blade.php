<x-admin-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-3xl text-black pb-6">Brands management</h2>
            <div class="flex">
                <a href="{{ route('brands.create') }}">
                    <x-admin.primary-button>
                        {{ __('Create New brand') }}
                    </x-admin.primary-button>
                </a>

                <a href="{{ route('brands.index') }}">
                    <x-admin.warning-button>
                        {{ __('All Brands') }}
                    </x-admin.warning-button>
                </a>
            </div>
        </div>
    </x-slot>

    <div class="w-full mt-12">
        <p class="text-xl pb-3 flex items-center"><i class="fas fa-list mr-3"></i> Trashed Brands</p>
        <div class="bg-white overflow-auto">
            @if(count($brands) > 0)
                <table class="min-w-full bg-white">
                    <thead class="bg-blue-400 text-white">
                    <tr>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold">Id</th>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold">Name</th>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold">Country</th>
                        <th class="w-4 text-left py-3 px-4 uppercase font-semibold">Deleted At</th>
                        <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold">Action</th>
                    </tr>
                    </thead>
                    <tbody class="text-gray-700">
                    @foreach ($brands as $brand)
                        <tr>
                            <td class="w-1/3 text-left py-3 px-4">{{ $brand->id }}</td>
                            <td class="w-1/3 text-left py-3 px-4">{{ $brand->name }}</td>
                            <td class="w-1/3 text-left py-3 px-4">{{ $brand->country }}</td>
                            <td class="w-4 text-left py-3 px-4">{{ $brand->deleted_at }}</td>
                            <td class="w-1/3 text-left py-3 px-4">
                                <div class="inline-flex">
                                    <form method="POST" class="inline-form" action="{{ route('brands.restore', $brand->id) }}">
                                        @csrf
                                        <x-admin.submit-button>
                                            {{ __('Restore') }}
                                        </x-admin.submit-button>
                                    </form>

                                    <form method="POST" class="inline-form" action="{{ route('brands.forceDestroy', $brand->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <x-admin.danger-button>
                                            {{ __('Force Remove') }}
                                        </x-admin.danger-button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            @else
                <p>No brands yet</p>
            @endif
            {{ $brands->links() }}
        </div>
    </div>

</x-admin-layout>
