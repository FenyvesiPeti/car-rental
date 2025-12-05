<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Reservation;

class CarController extends Controller
{
    public function index()
    {
        return view('main');
    }

    public function search(Request $request)
    {
        $request->validate([
        'start_date' => ['required', 'date'],
        'end_date' => ['required', 'date', 'after_or_equal:start_date'],
        ]);

        $start = $request->start_date;
        $end = $request->end_date;

        $cars = Car::where('is_active', true)
            ->whereDoesntHave('reservations', function($query) use ($start, $end) {
                $query->where(function ($q) use ($start, $end) {
                    $q->where('start_date', '<=', $end)
                    ->where('end_date', '>=', $start);
                });
            })
            ->get();

        return view('main', [
            'cars' => $cars,
            'start_date' => $start,
            'end_date' => $end,
        ]);
    }
}
