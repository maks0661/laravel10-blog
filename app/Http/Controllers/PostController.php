<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category') -> get(); // SELECT * FROM posts
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request -> validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);
        Post::create($request -> only('title', 'content', 'category_id'));
        return redirect() -> route('posts.index');
    }

    public function destroy(Post $post)
    {
        $post -> delete();
        return redirect() -> route('posts.index');
    }
}