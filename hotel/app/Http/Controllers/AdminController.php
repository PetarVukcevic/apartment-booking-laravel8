<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\Category;
use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{

    public function section()
    {

        $apartments = Apartment::latest()->with('category', 'landlord', 'city')->get();

        return view('admin.section', [
            'apartments' => $apartments
        ]);
    }

    public function create()
    {
        $categories = Category::all();
        $cities = City::all();
        $landlords = User::all();

        return view('admin.create', [
            'categories' => $categories,
            'cities' => $cities,
            'landlords' => $landlords
        ]);
    }

    public function store()
    {

        $attributes = \request()->validate([
           'title' => 'required',
            'address' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')],
            'price' => 'required',
            'city_id' => 'required',
            'user_id' => 'required',
            'rooms' => 'required',
            'adults' => 'required',
            'children' => 'required',
            'profile_img' => 'required|image',
            'view_img' => 'required|image',
            'lg_profile_img' => 'required|image',
            'description' => 'required',
            'slug' => ''
        ]);

        $attributes['slug'] = Str::slug($attributes['title']);
        $attributes['profile_img'] = 'storage/' . \request()->file('profile_img')->store('assets/images');
        $attributes['view_img'] = 'storage/' . \request()->file('view_img')->store('assets/images');
        $attributes['lg_profile_img'] = 'storage/' . \request()->file('lg_profile_img')->store('assets/images');
        $attributes['description'] = '<p>' . $attributes['description'] . '</p>';

        Apartment::create($attributes);

        return redirect('/catalog/'. $attributes['slug']);
    }
//    public function destroy($id)
//    {
//        Apartment::find($id)->delete();
//
//        return redirect()->back();
//    }

    public function destroy(Request $request)
    {
        Apartment::find($request->apartment_delete_id)->delete();

        return redirect()->back()->with('success', 'Apartment deleted!');
    }
}
