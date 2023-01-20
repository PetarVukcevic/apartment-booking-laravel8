<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Apartment extends Model
{
    use HasFactory, SoftDeletes;

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn ($query, $search) =>
            $query->where(fn($query) =>
                $query->where('title', 'like', '%' . $search . '%')
                )
            );

        $query->when($filters['category'] ?? false, fn ($query, $category) =>
            $query
                ->whereExists(fn($query) =>
                   $query->from('categories')
                        ->whereColumn('categories.id', 'apartments.category_id')
                        ->where('categories.slug', $category))
                );

        $query->when($filters['landlord'] ?? false, fn($query, $landlord) =>
            $query->whereHas('landlord', fn($query) =>
                $query->where('username', $landlord)
            )
        );

        $query->when($filters['city'] ?? false, fn($query, $city) =>
            $query->whereHas('city', fn($query) =>
                $query->where('name', $city)
        )
        );

        $query->when($filters['minPrice'] ?? false, function ($query, $minPrice) {
            $query->where('price', '>=', $minPrice);
        });

        $query->when($filters['maxPrice'] ?? false, function ($query, $maxPrice) {
            $query->where('price', '<=', $maxPrice);
        });

    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function landlord()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }


}
