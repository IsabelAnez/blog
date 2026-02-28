<x-layout>
    @can('access-admin-panel')
        <a href="{{ route('categories.create') }}">Crear Categoría</a>
    @endcan
    <h1>Listado de categorías</h1>

    <ul>
        @foreach ($categories as $category)
        <li>
            <a href="{{ route('categories.show', $category) }}">
                {{ $category->name }}
            </a>
        </li>
            
        @endforeach
    </ul>

    {{ $categories->links() }}
</x-layout>