<?php

namespace App\Http\Controllers;

use App\Models\Apartment;


class ApartmentController extends Controller
{

    public function apartments(\Request $request) {

        $items = $request->items ?? 5;

        $apartments = Apartment::latest()->filter(
            request(['search','category','landlord','city'])
        )->simplePaginate($items);

        return view('catalog.apartments', [
            'apartments' => $apartments,
            'items' => $items
//            'currentCategory' => Category::firstWhere('name',\request(('category')))

        ]);
    }


    public function show(Apartment $apartment) {
        return view('catalog.show',[
            'apartment' => $apartment
        ]);

    }

}
