<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'name',
        'price_per_day',
        'is_active',
        'image_path',
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
