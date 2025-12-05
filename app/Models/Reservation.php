<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'car_id',
        'name',
        'email',
        'phone',
        'address',
        'start_date',
        'end_date',
        'total_price',
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
