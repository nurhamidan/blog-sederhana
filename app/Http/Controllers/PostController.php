<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        $data = [
            'activeMenu' => 2,
            'posts' => $posts
        ];
        return view('posts', $data);
    }

    public function show(Post $post) {
        $data = [
            'activeMenu' => -1,
            'post' => $post
        ];
        return view('post', $data);
    }
}
