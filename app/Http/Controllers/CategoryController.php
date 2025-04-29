<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all(); // Category::all() - SELECT * FROM categories
        return view('categories.index', compact('categories')); // ['categories' => $categories]
    }

    public function store(Request $request)
    {
        $request -> validate(['name' => 'required|unique:categories']);
        Category::create($request -> only('name')); // ['name' => $value] 
        return redirect() -> route('categories.index');
    }

    public function destroy(Category $category)
    {
        $category -> delete();
        return redirect() -> route('categories.index');
    }
}