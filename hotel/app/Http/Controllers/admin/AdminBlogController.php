<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Feature;

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
        $attributes['about_id'] = 1;
        if (isset($attributes['author_img_url'])) {
            $attributes['author_img_url'] = 'storage/' . \request()->file('author_img_url')->store('assets/images');
        }
        Blog::create($attributes);

        return redirect('/admin-blogs');
    }
}
