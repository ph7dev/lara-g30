{{--posts list--}}

<x-main-layout>
    <x-slot name="header">
        <h1> Blog posts</h1>
    </x-slot>

    <h1>{{ $post->title }}</h1>

    <x-blog.detail :post="$post"></x-blog.detail>

    <x-slot name="footer">
        <h4>&copy; {{ config('app.name') }}</h4>
    </x-slot>
</x-main-layout>
