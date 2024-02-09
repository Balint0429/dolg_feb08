<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('cars')->insert([
            ['name' => 'Audi', 'quantity' => 10, 'type_id' => 1, 'color_id' => 1],
            ['name' => 'BMW', 'quantity' => 8, 'type_id' => 2, 'color_id' => 2],
            ['name' => 'Mercedes', 'quantity' => 5, 'type_id' => 3, 'color_id' => 3],
        ]);
    }
}

