<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminBlogController extends Controller
{
    public function indeX()
    {
        //
    }

    public function create()
    {
        return 'create';
    }

    public function store()
    {
        return 'store';
    }

    public function show(Blog $blog)
    {
        return $blog;
    }

    public function edit(Blog $blog)
    {
        return $blog;
    }

    public function update(Blog $blog)
    {
        $blog->update();
        return 'updated';
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return 1;
    }
}
