<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
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
        return 'store'
    }

    public function show(Blog $blog)
    {
        return $blog;
    }

    public function edit(Blog $blog)
    {
        return 'edit';
    }

    public function update(Blog $blog)
    {
        $blog->update();
        return 'update';
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return 1;
    }
}
