<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Rules\BookedDatesRule;


class BookingController extends Controller
{

    public function show(Apartment $apartment) {
        return view('booking.show',[
            'apartment' => $apartment
        ]);

    }
    public function store(Apartment $apartment) {

        $attributes = request()->validate([
            'check_in' => ['required', 'date', 'after_or_equal:today', new BookedDatesRule(request()->check_in, request()->check_out)],
            'check_out' => ['required', 'date', 'after_or_equal:check_in', new BookedDatesRule(request()->check_in, request()->check_out)],
            'adults' => 'required',
            'children' => '',
            'total_price' => 'required',
            'user_id' => '',
        ]);
        $attributes['user_id'] = \request()->user()->id;

        $apartment->bookings()->create($attributes);

        return redirect(url('/my-bookings'))->with('success', 'You booked an apartment.');
    }



    public function all() {
        $apartments = auth()->user()->bookings->sortByDesc('created_at');
        $sum = auth()->user()->bookings->sum('total_price');
        return view('booking.all', [
            'apartments' => $apartments,
            'sum' => $sum
        ]);
    }

    public function myBookedApartments() {

        $bookings = Booking::landlordBookings()->get();
        $totalEarnings = Booking::landlordBookings()->sum('total_price');

        return view('booking.my-apartments', [
            'bookings' => $bookings,
            'totalEarnings' => $totalEarnings
        ]);

    }



}
