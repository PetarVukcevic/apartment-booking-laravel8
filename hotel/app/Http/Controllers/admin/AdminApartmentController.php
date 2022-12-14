<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Apartment;
use App\Models\Category;
use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class AdminApartmentController extends Controller
{

    public function section()
    {

        $apartments = Apartment::orderBy('id', 'ASC')->with('category', 'landlord', 'city')->get();

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

        Apartment::create($attributes);

        return redirect('/catalog/'. $attributes['slug']);
    }

    public function edit($id) {
        $categories = Category::all();
        $cities = City::all();
        $landlords = User::all();
        $apartment = Apartment::find($id);


        return view('admin.edit',
        [
            'categories' => $categories,
            'cities' => $cities,
            'landlords' => $landlords,
            'apartment' => $apartment
        ]);
    }

    public function update(Apartment $apartment)
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
            'profile_img' => 'image',
            'view_img' => 'image',
            'lg_profile_img' => 'image',
            'description' => 'required',
        ]);

        if (isset($attributes['profile_img'])) {
            $attributes['profile_img'] = 'storage/' . \request()->file('profile_img')->store('assets/images');
        }
        if (isset($attributes['view_img'])) {
            $attributes['view_img'] = 'storage/' . \request()->file('view_img')->store('assets/images');
        }
        if (isset($attributes['lg_profile_img'])) {
            $attributes['lg_profile_img'] = 'storage/' . \request()->file('lg_profile_img')->store('assets/images');
        }
        $attributes['slug'] = Str::slug($attributes['title']);

        $apartment->update($attributes);

        return back()->with('success', 'Apartment updated!');
    }

    public function destroy(Request $request)
    {
        Apartment::find($request->apartment_delete_id)->delete();

        return redirect()->back()->with('success', 'Apartment deleted!');
    }
}
