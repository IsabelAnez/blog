<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
// CommentController.php

    public function store(Request $request, Post $post)
    {
        $request->validate([
            'body' => 'required|min:5'
        ]);

        $post->comments()->create([
            'body' => $request->body,
        ]);

        return back()->with('mensaje', '¡Comentario publicado!');
    }
}