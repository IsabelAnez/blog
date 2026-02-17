<x-layout>
    <a href="{{ route('posts.edit', $post) }}">Editar post</a>
    <h1>{{ $post->title }}</h1>
    <p>Categoría: {{ $post->category->name }}</p>
    <p>Extract: {{ $post->extract }}</p>
    <p>Image path: {{ $post->image_path }}</p>
    <div>{{ $post->body }}</div><br>

    <form action="{{ route('posts.destroy', $post) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</x-layout>