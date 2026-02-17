<x-layout>
    <h1>Editar Post</h1>
    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')
        <div style="margin-bottom: 10px;">
            <label for="title">Title</label><br>
            <input type="text" name="title" id="title" value={{ old('title', $post->title)}}>
            <br>
            @error('title')
                <span style="color: red">
                    {{$message}}
                </span>
            @enderror
        </div>
        <div>
            <label for="slug">Slug</label><br>
            <input type="text" name="slug" id="slug" value="{{ old('slug', $post->slug) }}">

            @error('slug')
                <span style="color: red">{{ $message }}</span>
            @enderror
        </div>
        <div style="margin-bottom: 10px;">
            <label for="extract">Extract</label><br>
            <input type="text" name="extract" id="extract" value={{ old('extract', $post->extract)}}>
            <br>
            @error('extract')
                <span style="color: red">
                    {{$message}}
                </span>
            @enderror
        </div>
        <div style="margin-bottom: 10px;">
            <label for="body">Body</label><br>
            <textarea name="body" id="body" cols="40" rows="7">{{ old('body', $post->body)}}</textarea>
            <br>
            @error('body')
                <span style="color: red">
                    {{$message}}
                </span>
            @enderror
        </div>
        <div style="margin-bottom: 10px;">
            <label for="image_path">Image path</label><br>
            <input type="text" name="image_path" id="image_path" value={{ old('image_path', $post->image_path)}}>
            <br>
            @error('image_path')
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
                    <option value="{{ $category->id }}" @selected(old('category_id', $post->category_id) == $category->id)>
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

        <button type="submit">Edit</button>
    </form>
</x-layout>