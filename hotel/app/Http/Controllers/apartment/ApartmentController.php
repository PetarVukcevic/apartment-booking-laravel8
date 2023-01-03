<?php

namespace App\Http\Controllers\apartment;

use App\Http\Controllers\Controller;
use App\Models\Apartment;
use Illuminate\Http\Request;


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

}
