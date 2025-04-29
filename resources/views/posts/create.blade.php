@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <input type="text" name="title" class="form-control" placeholder="Title" required>
        </div>
        <div class="mb-3">
            <textarea name="content" class="form-control" placeholder="Content" required></textarea>
        </div>
        <div class="mb-3">
            <select name="category_id" class="form-control" required>
                <option value="">Select Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category -> id }}">{{ $category -> name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
@endsection