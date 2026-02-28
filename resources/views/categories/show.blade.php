<x-layout>
    @can('access-admin-panel')
        <a href="{{ route('categories.edit', $category) }}">Editar categoría</a>
    @endcan
    <h1>{{ $category->name }}</h1>
    @can('access-admin-panel')
        <form action="{{ route('categories.destroy', $category) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>    
    @endcan
</x-layout>