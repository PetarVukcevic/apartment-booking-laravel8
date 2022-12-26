<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;

class AdminCategoryController extends Controller
{
    public function all() {
        $categories = Category::all();

        return view('admin-categories.categories-table', [
            'categories' => $categories
        ]);
    }


}
