{{--posts list--}}

<style>
    .nav > w-5 {
        display: none;
    }
</style>

<x-main-layout>
    <x-slot name="header">
        <h1>Blog Posts</h1>
    </x-slot>

    @forelse($posts as $post)
        <p>
            <h3>{{ $post->title }}</h3>
            <div>
                {{ $post->content }}
            </div>
            <a href="blog/{{ $post->id }}">Read more</a>
        </p>
    @empty
        <strong>No posts yet</strong>
    @endforelse

    <hr>

    {{ $posts->links() }}

    <x-slot name="footer">
        <h4>&copy; {{ config('app.name') }}</h4>
    </x-slot>
</x-main-layout>
