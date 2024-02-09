<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public function getCars()
    {
        $cars = Car::all();
    return response()->json($cars);
    }

    public function getOneCar(Request $request)
    {
        $name = $request->input('name');
        $car = DB::table('cars')->where('name', $name)->first();
        return response()->json($car);
    }

    public function addCar(Request $request)
    {
        $carData = $request->only(['name', 'quantity', 'type_id', 'color_id']);
        DB::table('cars')->insert($carData);
        return response()->json(['message' => 'Car added successfully']);
    }

    public function modifyCar(Request $request)
    {
        // Implement modifying a car's data in the database
    }

    public function destroyCar(Request $request)
    {
        // Implement deleting a car from the database
    }
}
