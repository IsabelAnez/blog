<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi Blog</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ route('posts.index') }}">Posts</a></li>
            <li><a href=" {{ route('categories.index') }}">Categorías</a></li>
            <li><a href="">Tags</a></li>
        </ul>
    </nav>
    
    <hr>

    {{ $slot }}
</body>
</html>