<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{

    public function apartments() {


        return view('catalog.apartments', [
            'apartments' => Apartment::latest()->filter(
                request(['search','category','landlord'])
            )->simplePaginate(3)
//            'currentCategory' => Category::firstWhere('name',\request(('category')))

        ]);
    }


//    public function show(Apartment $apartment) {
//        return view('catalog.show',[
//            'apartment' => $apartment
//        ]);
//
//    }

}
