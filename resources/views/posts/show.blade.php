<x-layout>
    <a href="{{ route('posts.edit', $post->id) }}">Editar post</a>
    <h1>{{ $post->title }}</h1>
    <p>Categoría: {{ $post->category->name }}</p>
    <div>{{ $post->body }}</div><br>

    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</x-layout>