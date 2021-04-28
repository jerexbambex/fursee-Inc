<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Traits\ImageUpload;
use App\Models\Blog;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminBlogController extends Controller
{
    use ImageUpload;

    public function index()
    {
        $blogs = Blog::with('category')->latest()->get();
        return view('admin.blog.index', compact('blogs'));
    }

    public function create(Request $request)
    {
        $attributes = $request->validate([
            'title' => ['required', 'max:100'],
            'body' => ['required']
        ]);

        if($request->hasFile('avatar')) {
            $request->validate([
                'avatar' => ['image', 'mimes:png,jpg,jpeg', 'max:4048']
            ]);

            $results = $this->imageUpload($request->file('avatar'));

            $attributes['avatar'] = json_encode($results);
        }

        Blog::create($attributes);

        session()->flash('success', 'You have successfully added a new post.');
        return back();
    }

    public function store()
    {
        return 'store';
    }

    public function show(Blog $blog)
    {
        return view('admin.blog.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $attributes = $request->validate([
            'title' => ['required'],
            'body' => ['required']
        ]);

        if ($request->hasFile('avatar')) {
            $request->validate([
                'avatar' => ['required', 'image', 'mimes:png,jpg,jpeg', 'max:4048'],
            ]);
            if ($blog->avatar) {
                $publicId = json_decode($blog->avatar)->public_id;
                Cloudinary::destroy($publicId, $options = []);
            }

            $results = $this->imageUpload(request()->file('avatar'));

            $attributes['avatar'] = json_encode($results);
        }

        $blog->update($attributes);

        session()->flash('success', 'The post was successfully updated');
        return redirect()->route('admin.blog.show', $blog);
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        session()->flash('success', 'The post was successfully deleted');
        return back();
    }
}
