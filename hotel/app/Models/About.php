<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;


    public function features()
    {
        return $this->hasMany(Feature::class);
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
