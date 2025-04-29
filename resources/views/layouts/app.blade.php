<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">Blog</a>
            <div class="navbar-nav">
                <a class="nav-link" href="{{ route('categories.index') }}">Categories</a>
                <a class="nav-link" href="{{ route('posts.index') }}">Posts</a>
                <a class="nav-link" href="{{ route('posts.create') }}">Create Post</a>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>