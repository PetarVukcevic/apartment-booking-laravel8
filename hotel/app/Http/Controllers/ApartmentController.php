<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{

    public function index() {

        return view('catalog', [
            'apartments' => Apartment::latest()->filter(request(['search','category']))->get(),
            'categories' => Category::all(),
//            'currentCategory' => Category::firstWhere('name',\request(('category')))

        ]);
    }

    public function landlord(User $landlord) {

        return view('catalog', [
            'apartments' => $landlord->apartments,
//            'currentCategory' => $category,
            'categories' => Category::all()
        ]);
    }

}
