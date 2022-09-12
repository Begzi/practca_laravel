<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->orderBy('id', 'desc')->paginate(2);

        return view('posts.index', compact('posts'));
    }
      public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail(); //if not, get 404
        $post->views += 1;
        $post->update();
        return view('posts.show', compact('post'));
    }
}
