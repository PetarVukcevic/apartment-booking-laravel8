<?php

namespace App\Http\Controllers\apartment;

use App\Http\Controllers\Controller;
use App\Models\Apartment;
use App\Models\Category;
use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;


class ApartmentController extends Controller
{

    public function apartments(Request $request) {

        $items = $request->items ?? 10;
        $sorting = $request->sorting ?? "newest";
        $minPrice = $request->input('minPrice');
        $maxPrice = $request->input('maxPrice');


        if ($sorting === 'title') {
            $apartments = Apartment::orderBy('title', 'ASC')->with('landlord','city','category','ratings')->filter(
                request(['search','category','landlord','city', 'minPrice', 'maxPrice'])
            )->simplePaginate($items);
        }
        elseif ($sorting == 'lowest_price') {
            $apartments = Apartment::orderBy('price', 'ASC')->with('landlord','city','category','ratings')->filter(
                request(['search','category','landlord','city', 'minPrice', 'maxPrice'])
            )->simplePaginate($items);
        }
        elseif ($sorting == 'highest_price') {
            $apartments = Apartment::orderBy('price', 'DESC')->with('landlord','city','category','ratings')->filter(
                request(['search','category','landlord','city', 'minPrice', 'maxPrice'])
            )->simplePaginate($items);
        }
        elseif ($sorting == 'oldest') {
            $apartments = Apartment::orderBy('created_at','ASC')->with('landlord','city','category','ratings')->filter(
                request(['search','category','landlord','city', 'minPrice', 'maxPrice'])
            )->simplePaginate($items);

        }
        else {
            $apartments = Apartment::orderBy('created_at','DESC')->with('landlord','city','category','ratings')->filter(
                request(['search','category','landlord','city', 'minPrice', 'maxPrice'])
            )->simplePaginate($items);
        }


        return view('catalog.apartments', [
            'apartments' => $apartments,
            'items' => $items,
            'sorting' => $sorting,
            'minPrice' => $minPrice,
            'maxPrice' => $maxPrice
        ]);
    }

    public function show(Apartment $apartment) {
        return view('catalog.show',[
            'apartment' => $apartment
        ]);

    }

    public function myApartments()
    {
        $apartments = auth()->user()->apartments;

        return view('catalog.my-apartments', [
            'apartments' => $apartments
        ]);
    }

    public function create() {
        $categories = Category::all();
        $cities = City::all();
        $landlords = User::all();

        return view('catalog.create', [
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
                'user_id' => '',
                'rooms' => 'required',
                'adults' => 'required',
                'children' => 'required',
                'profile_img' => 'required|image',
                'view_img' => 'required|image',
                'lg_profile_img' => 'required|image',
                'description' => 'required',
                'slug' => ''
            ]);

            $attributes['user_id'] = auth()->user()->id;
            $attributes['slug'] = Str::slug($attributes['title']);
            $attributes['profile_img'] = 'storage/' . \request()->file('profile_img')->store('assets/images');
            $attributes['view_img'] = 'storage/' . \request()->file('view_img')->store('assets/images');
            $attributes['lg_profile_img'] = 'storage/' . \request()->file('lg_profile_img')->store('assets/images');

            Apartment::create($attributes);

            return redirect(url('/my-apartments'))->with('success', 'You have published an apartment.');
        }

    public function destroy(Request $request)
    {
        Apartment::find($request->apartment_delete_id)->delete();

        return redirect()->back()->with('success', 'Apartment deleted!');
    }

}
