<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use HasFactory;

    public function apartment()
    {
        return $this->belongsTo(Apartment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeLandlordBookings($query)
    {
        return $query->whereHas('apartment', function ($query) {
            $query->where('user_id', auth()->id());
        });
    }
}
