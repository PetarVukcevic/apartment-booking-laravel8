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
        return redirect('admin-cities')->with('success', 'City created!');
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
        return redirect('/admin-cities')->with('success', 'City updated!');
    }

    public function destroyCities(Request $request)
    {
        $city = City::find($request->city_delete_id);

        if($city->has('apartments')) {
            return redirect('/admin-cities')->with('success', 'Please remove the apartments from this city first!');
        }else {
            $city->delete();
            return redirect('/admin-cities')->with('success', 'City deleted!');
        }

    }
}
