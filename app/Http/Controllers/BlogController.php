<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class BlogController extends Controller
{
    public function index()
{
    $posts = Post::where('status', 'published')
                 ->latest()
                 ->with(['category', 'author', 'tags'])
                 ->paginate(10);

    $recentPosts = Post::latest()->take(5)->get();

    return view('blog.index', compact('posts', 'recentPosts'));
}

    public function show($slug)
{
    $post = Post::where('slug', $slug)
                ->where('status', 'published')
                ->firstOrFail();

    $popularPosts = Post::orderBy('views', 'desc')->take(5)->get();
    $recentPosts = Post::latest()->take(5)->get();

    return view('blog.post', compact('post', 'popularPosts', 'recentPosts'));
    }

}
