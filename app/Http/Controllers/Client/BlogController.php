<?php

namespace App\Http\Controllers\Client;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class BlogController extends Controller
{
    // public $blogs;

    public function __construct()
    {
        // $this->blogs = Blog::with('category')->get();
    }
    public function index()
    {
        $blogs = Blog::with('category')->paginate(15);
        $latestPost = Blog::with('category')->latest()->first();

        return view('client.pages.blog.index', compact(['blogs', 'latestPost']));
    }

    public function show(Blog $blog)
    {
        $otherPosts = Blog::with('category')->where('id', '!=', $blog->id)->inRandomOrder()->limit(3)->get();

        return view('client.pages.blog.show', compact(['blog', 'otherPosts']));
    }
}
