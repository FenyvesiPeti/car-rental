<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        return view('main');
    }

    public function search(Request $request)
    {
        // Logika majd a kereséshez
        return back()->with('message', 'Logika majd a kereséshez!');
    }
}
