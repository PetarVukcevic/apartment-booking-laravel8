<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{

    public function allCities() {
        $cities = City::all();

        return view('admin-cities.admin-cities', [
            'cities' => $cities
        ]);
    }

    public function createCities() {
        return view('admin-cities.cities-create');
    }

    public function storeCities() {
        $attributes = \request()->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        City::create($attributes);
        return back()->with('success', 'City updated!');
    }

    public function editCities($id) {
        $city = City::find($id);

        return view('admin-cities.cities-edit',
            [
                'city' => $city
            ]);
    }

    public function updateCities(City $city) {
        $attributes = \request()->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $city->update($attributes);
        return back()->with('success', 'City updated!');
    }

    public function destroyCities(Request $request)
    {
        City::find($request->city_delete_id)->delete();

        return redirect()->back()->with('success', 'City deleted!');
    }
}
