<?php

namespace App\Http\Controllers\Client;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class BlogController extends Controller
{
    public function index()
    {
        return 1;
    }

    public function show(Blog $blog)
    {
        return $blog;
    }
}
