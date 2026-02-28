<x-layout>
    @can('access-admin-panel')
        <a href="{{ route('tags.create') }}">Crear Tag</a>
    @endcan
    <h1>Listado de tags</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                @can('access-admin-panel')
                <th>Acciones</th>
                @endcan
            </tr>
        </thead>
        <tbody>
            @foreach($tags as $tag)
                <tr>
                    <td>{{ $tag->name }}</td>
                    @can('access-admin-panel')
                    <td>
                        <a href="{{ route('tags.edit', $tag) }}">Editar</a>

                        <form action="{{ route('tags.destroy', $tag) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                    @endcan
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>