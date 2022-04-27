<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function show(Post $post)
        //route model binding
    {
        //$post = Post::find($postId);
        return view('post', compact('post'));
    }
}
