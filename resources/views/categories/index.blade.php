@extends('layouts.app')

@section('content')
    <h1>Categories</h1>
    <form action="{{ route('categories.store') }}" method="POST" class="mb-4">
        @csrf
        <div class="mb-3">
            <input type="text" name="name" class="form-control" placeholder="Category name" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Category</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>
                        <form action="{{ route('categories.destroy', $category) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</p>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection