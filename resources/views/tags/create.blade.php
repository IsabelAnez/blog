<x-layout>

    <h1>Crear Tag</h1>

    <form action="{{ route('tags.store') }}" method="POST">
        @csrf
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">

        @error('name')
            <p>{{ $message }}</p>
        @enderror

        <button type="submit">Guardar</button>
    </form>
</x-layout>