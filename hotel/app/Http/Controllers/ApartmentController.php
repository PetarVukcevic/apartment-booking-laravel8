<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{

    public function index() {

        $apartments = Apartment::latest()->with(['category', 'landlord'])->filter(request(['search']))->get();
//        dd($apartments);
        return view('catalog', [
//            'apartments' => Apartment::latest()->filter(request(['search']))->get(),
            'apartments' => $apartments,
            'categories' => Category::all()

        ]);
    }

    public function categories(Category $category) {
//        dd($category->name);
        $apartments = $category->apartments;
//        dd($apartments);
        return view('catalog', [

            'apartments' => $apartments,
//            'currentCategory' => $category,
            'categories' => Category::all()

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
