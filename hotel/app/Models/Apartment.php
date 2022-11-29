<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'rooms', 'price', 'description', 'img_url', 'address', 'adults', 'children'];

//    public $paginate_numbers = [1, 5, 10, 25];

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
