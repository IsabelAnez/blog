<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Category::latest()->paginate();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Category::create($request->all());
        return $request->all();
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        // $post = Post::find($post);
        return view('categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        // $post = Post::find($post);
        $categories = Category::all();
        return view('posts.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $category)
    {
        $request->validate([
            'name'=>'required'
        ]);
        $category = Category::find($category);
        $category->update($request->all());
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        // $post = Post::find($post);
        $category->delete();
        return redirect()->route('categories.index');
    }
}
