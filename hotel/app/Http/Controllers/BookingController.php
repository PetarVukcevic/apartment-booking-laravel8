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
            'check_in' => ['required', 'date', Rule::lessThanOrEqual('checkout_date')],
            'check_out' => ['required', 'date', Rule::greaterThanOrEqual('checkin_date')],
            'total_price' => 'required',
            'user_id' => '',
        ]);
        $attributes['user_id'] = \request()->user()->id;

        $apartment->bookings()->create($attributes);

        dd('success');
        return redirect(url()->current())->with('success', 'You booked an apartment.');

    }
}
