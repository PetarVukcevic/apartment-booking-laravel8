<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Request;


class ApartmentController extends Controller
{

    public function apartments(Request $request) {

        $items = $request->items ?? 5;

        $apartments = Apartment::latest()->filter(
            request(['search','category','landlord','city'])
        )->simplePaginate($items);

        return view('catalog.apartments', [
            'apartments' => $apartments,
            'items' => $items
        ]);
    }


    public function show(Apartment $apartment) {
        return view('catalog.show',[
            'apartment' => $apartment
        ]);

    }

}
