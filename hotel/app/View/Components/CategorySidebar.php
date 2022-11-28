<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;

class CategorySidebar extends Component
{

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.category-sidebar', [
            'categories' => Category::all(),
            //'currentCategory' => Category::firstWhere('name',\request(('category')))

        ]);
    }
}
