<x-layout>
    @can('update-post', $post)
        <a href="{{ route('posts.edit', $post) }}">Editar post</a>
    @endcan
    <h1>{{ $post->title }}</h1>
    <p>Categoría: {{ $post->category->name }}</p>
    <p>Tags:
        @forelse($post->tags as $tag)
            {{ $tag->name }}{{ !$loop->last ? ', ' : '' }}
        @empty
        Sin tags
        @endforelse
    </p>
    <p>Extract: {{ $post->extract }}</p>
    <p>Image path: {{ $post->image_path }}</p>
    <div>{{ $post->body }}</div><br>

    @can('delete', $post)
    <form action="{{ route('posts.destroy', $post) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form><br>
    @endcan

<h3>Comentarios</h3>

@forelse ($post->comments as $comment)
    <div style="border: 1px solid #ddd; padding: 10px; margin-bottom: 10px;">
        <p>{{ $comment->body }}</p>
        <small>Publicado el: {{ $comment->created_at->format('d/m/Y H:i') }}</small>
    </div>
@empty
    <p>Aún no hay comentarios. ¡Sé el primero en escribir!</p>
@endforelse

<hr>

<h4>Deja un comentario</h4>
<form action="{{ route('comments.store', $post) }}" method="POST">
    @csrf
    <div>
        <textarea name="body" rows="3" style="width: 100%;" placeholder="Escribe aquí tu comentario..."></textarea>
        @error('body')
            <small style="color: red;">{{ $message }}</small>
        @enderror
    </div>
    <br>
    <button type="submit">Enviar comentario</button>
</form>

@if(session('mensaje'))
    <p style="color: green;">{{ session('mensaje') }}</p>
@endif
</x-layout>