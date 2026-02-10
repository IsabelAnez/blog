<x-layout>
    {{-- <h1>Crear Post</h1> --}}
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div style="margin-bottom: 10px;">
            <label for="title">Title</label><br>
            <input type="text" name="title" id="title" value={{ old('title')}}>
            <br>
            @error('title')
                <span style="color: red">
                    {{$message}}
                </span>
            @enderror
        </div>
        <div style="margin-bottom: 10px;">
            <label for="body">Content</label><br>
            <textarea name="body" id="body" cols="40" rows="7">{{ old('body')}}</textarea>
            <br>
            @error('body')
                <span style="color: red">
                    {{$message}}
                </span>
            @enderror
        </div>
        <div style="margin-bottom: 10px;">
            <label for="category_id">Categoría</label><br>
            <select name="category_id" id="category_id">
                <option value="" selected disabled></option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            <br>
            @error('category_id')
                <span style="color: red">
                    {{$message}}
                </span>
            @enderror
        </div>
        <button type="submit">Create</button>
    </form>
</x-layout>