<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'rooms', 'price', 'description', 'img_url', 'address', 'adults', 'children'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn ($query, $search) =>
            $query
                ->where('title', 'like', '%' . $search . '%'));

        $query->when($filters['category'] ?? false, fn ($query, $category) =>
            $query
                ->whereExists(fn($query) =>
                   $query->from('categories')
                        ->whereColumn('categories.id', 'apartments.category_id')
                        ->where('categories.name', $category))
                );

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
