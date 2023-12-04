<x-admin-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-3xl text-black pb-6">Brand management</h2>
        </div>
    </x-slot>

    <div class="w-full mt-12">
        <p class="text-3xl text-black pb-6">Create New Brand</p>
        <form class="p-10 bg-white rounded shadow-xl" action="{{ route('brands.store') }}" method="POST">
            @csrf
            <div>
                <label for="name" class="block text-sm text-gray-600">
                    Name
                    <input class="w-full px-5 py-1 text-gray-700 rounded bg-gray-100"
                           type="text"
                           name="name"
                           id="name"
                           placeholder="Enter brand name"
                           value="{{ old('name') }}"
                    >
                    @error('name')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <label for="country" class="block text-sm text-gray-600">
                    Country
                    <input class="w-full px-5 py-1 text-gray-700 rounded bg-gray-100"
                           type="text"
                           name="country"
                           id="country"
                           placeholder="Enter brand country"
                           value="{{ old('country') }}"
                    >
                    @error('country')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
                <label for="description" class="block text-sm text-gray-600">
                    Description
                    <textarea class="w-full px-5 py-1 text-gray-700 rounded bg-gray-100"
                           name="description"
                           id="description"
                           placeholder="Enter brand description"
                    >{{ old('description') }}</textarea>
                    @error('description')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </label>
            </div>
            <x-button class="ms-4">
                {{__('Save')}}
            </x-button>

            {{--<x-admin.submit.button class="ms-5">
                {{__('Save 2')}}
            </x-admin.submit.button>--}}
        </form>
    </div>

</x-admin-layout>
