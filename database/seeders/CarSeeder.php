<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    public function run(): void
    {
        Car::insert([
            [
                'name' => 'Toyota Corolla',
                'price_per_day' => 10000,
                'image_path' => 'https://via.placeholder.com/300x200?text=Toyota',
            ],
            [
                'name' => 'BMW 320d',
                'price_per_day' => 20000,
                'image_path' => 'https://via.placeholder.com/300x200?text=BMW',
            ],
            [
                'name' => 'Audi A4',
                'price_per_day' => 22000,
                'image_path' => 'https://via.placeholder.com/300x200?text=Audi',
            ]
        ]);
    }
}
