<x-layout>
    <a href="{{ route('posts.create') }}">Crear Post</a>
    <h1>Listado de posts</h1>

    <ul>
        @foreach ($posts as $post)
        <li>
            <a href="{{ route('posts.show', $post) }}">
                {{ $post->title }}
            </a>
        </li>
            
        @endforeach
    </ul>

    {{ $posts->links() }}
</x-layout>