<x-layout>
    <h1>Editar Tag</h1>

    <form action="{{ route('tags.update', $tag) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" value="{{ old('name', $tag->name) }}">

        @error('name')
            <p style="color: red;">{{ $message }}</p>
        @enderror

        <button type="submit">Actualizar</button>
    </form>
</x-layout>