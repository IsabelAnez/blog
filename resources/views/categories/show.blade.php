<x-layout>
    <a href="{{ route('categories.edit', $category) }}">Editar categoría</a>
    <h1>{{ $category->name }}</h1>
    <form action="{{ route('categories.destroy', $category) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</x-layout>