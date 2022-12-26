<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Feature;
use Illuminate\Http\Request;
use Str;

class AdminCategoryController extends Controller
{
    public function all() {
        $categories = Category::all();

        return view('admin-categories.categories-table', [
            'categories' => $categories
        ]);
    }

    public function createCategory() {
        return view('admin-categories.categories-create');
    }

    public function storeCategory() {
        $attributes = \request()->validate([
            'name' => 'required',
            'description' => 'required',
            'slug' => ''
        ]);
        $attributes['slug'] = Str::slug($attributes['name']);

        Category::create($attributes);
        return back()->with('success', 'Feature updated!');
    }

    public function editCategory($id) {
        $category = Category::find($id);

        return view('admin-categories.categories-edit',
            [
                'category' => $category
            ]);
    }

    public function updateCategory(Category $category)
    {
        $attributes = \request()->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $category->update($attributes);
        return back()->with('success', 'Feature updated!');

    }

    public function destroyCategory(Request $request)
    {
        Category::find($request->category_delete_id)->delete();

        return redirect()->back()->with('success', 'Category deleted!');
    }


}
