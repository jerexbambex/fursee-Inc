<?php

namespace App\Http\Controllers\Client;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->with('category')->paginate(9);
        // $latestPost = Blog::with('category')->latest()->first();
        $latestPost = [];

        return view('client.pages.blog.index', compact('blogs', 'latestPost'));
    }

    public function show(Blog $blog)
    {
        $otherPosts = Blog::with('category')->where('id', '!=', $blog->id)->inRandomOrder()->limit(3)->get();

        return view('client.pages.blog.show', compact('blog', 'otherPosts'));
    }
}
