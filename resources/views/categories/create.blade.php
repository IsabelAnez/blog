<x-layout>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div style="margin-bottom: 10px;">
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" value={{ old('name')}}>
            <br>
            @error('name')
                <span style="color: red">
                    {{$message}}
                </span>
            @enderror
        </div>
        <button type="submit">Create</button>
    </form>
</x-layout>