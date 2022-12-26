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

}
