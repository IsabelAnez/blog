<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = Post::paginate();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title'=>'required',
            'body'=>'required',
            'category_id'=>'required'
        ]);
        Post::create($request->all());
        return $request->all();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $post)
    {
        //
        $post = Post::find($post);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $post)
    {
        //
        $post = Post::find($post);
        $categories = Category::all();
        return view('posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $post)
    {
        //
        $request->validate([
            'title'=>'required',
            'body'=>'required',
            'category_id'=>'required'
        ]);
        $post = Post::find($post);
        $post->update($request->all());
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $post)
    {
        //
        $post = Post::find($post);
        $post->delete();
        return redirect()->route('posts.index');
    }
}
