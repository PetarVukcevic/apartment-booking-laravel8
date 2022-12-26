<?php

namespace App\Http\Controllers;

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

}
