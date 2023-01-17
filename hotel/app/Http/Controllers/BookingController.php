<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BookingController extends Controller
{

    public function show(Apartment $apartment) {
        return view('booking.show',[
            'apartment' => $apartment
        ]);

    }
    function store(Apartment $apartment) {

        $attributes = request()->validate([
            'check_in' => ['required', 'date'],
            'check_out' => ['required', 'date'],
            'adults' => 'required',
            'children' => '',
            'total_price' => 'required',
            'user_id' => '',
        ]);
        $attributes['user_id'] = \request()->user()->id;

        $apartment->bookings()->create($attributes);

        return redirect(url()->current())->with('success', 'You booked an apartment.');
    }
}
