<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Feature;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    public function blogs() {
        $blogs = Blog::all();

        return view('admin-blogs.all', [
            'blogs' => $blogs
        ]);
    }

    public function create() {
        return view('admin-blogs.blogs-create');
    }

    public function store() {

        $attributes = \request()->validate([
            'author' => 'required',
            'author_role' => 'required',
            'description' => 'required',
            'about_id' => '',
            'author_img_url' => 'required|image'
        ]);
        if (isset($attributes['author_img_url'])) {
            $attributes['author_img_url'] = 'storage/' . \request()->file('author_img_url')->store('assets/images');
        }
        $attributes['about_id'] = 1;

        Blog::create($attributes);

        return redirect('/admin-blogs');
    }

    public function edit($id) {
        $blog = Blog::find($id);

        return view('admin-blogs.blogs-edit',
            [
                'blog' => $blog
            ]);
    }

    public function update(Blog $blog) {

        $attributes = \request()->validate([
            'author' => 'required',
            'author_role' => 'required',
            'description' => 'required',
            'about_id' => '',
            'author_img_url' => 'image'
        ]);
        if (isset($attributes['author_img_url'])) {
            $attributes['author_img_url'] = 'storage/' . \request()->file('author_img_url')->store('assets/images');
        }
        $attributes['about_id'] = 1;

        Blog::update($attributes);

        return redirect('/admin-blogs');
    }

    public function destroy(Request $request)
    {
        Blog::find($request->blog_delete_id)->delete();

        return redirect()->back()->with('success', 'Blog deleted!');
    }


}
