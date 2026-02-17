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
        <div>
            <label for="slug">Slug</label><br>
            <input type="text" name="slug" id="slug" value="{{ old('slug') }}">

            @error('slug')
                <span style="color: red">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="extract">Extract</label><br>
            <input type="text" name="extract" id="extract" value="{{ old('extract') }}">

            @error('extract')
                <span style="color: red">{{ $message }}</span>
            @enderror
        </div>
        <div style="margin-bottom: 10px;">
            <label for="body">Body</label><br>
            <textarea name="body" id="body" cols="40" rows="7">{{ old('body')}}</textarea>
            <br>
            @error('body')
                <span style="color: red">
                    {{$message}}
                </span>
            @enderror
        </div>
        <div>
            <label for="image_path">Image path</label><br>
            <input type="text" name="image_path" id="image_path" value="{{ old('image_path') }}">

            @error('image_path')
                <span style="color: red">{{ $message }}</span>
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
        <br>
        <button type="submit">Create</button>
    </form>
</x-layout>