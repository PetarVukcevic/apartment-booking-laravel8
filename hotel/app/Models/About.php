<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class About extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function features()
    {
        return $this->hasMany(Feature::class);
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function badges()
    {
        return $this->hasMany(Badge::class);
    }
}
