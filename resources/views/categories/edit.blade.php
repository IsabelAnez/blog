<x-layout>
    <h1>Editar Categoría</h1>
    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')
        <div style="margin-bottom: 10px;">
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" value={{ old('name', $category->name)}}>
            <br>
            @error('name')
                <span style="color: red">
                    {{$message}}
                </span>
            @enderror
        </div>

        <button type="submit">Edit</button>
    </form>
</x-layout>