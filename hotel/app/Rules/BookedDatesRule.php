<?php

namespace App\Rules;

use App\Models\Booking;
use Illuminate\Contracts\Validation\Rule;

class BookedDatesRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($start, $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $bookings = Booking::where(function ($query) {
            $query->where(function ($query) {
                $query->where('check_in', '>=', $this->start)
                    ->where('check_out', '<=', $this->end);
            })
                ->orWhere(function ($query) {
                    $query->where('check_out', '>=', $this->start)
                        ->where('check_out', '<=', $this->end);
                })
                ->orWhere(function ($query) {
                    $query->where('check_in', '<', $this->start)
                        ->where('check_out', '>', $this->end);
                });
        })
            ->count();

        return $bookings == 0;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The check-in and check-out dates you have selected are already booked';
    }
}
