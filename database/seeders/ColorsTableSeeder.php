<?php

use Illuminate\Database\Seeder;
use App\Models\Color;

class ColorsTableSeeder extends Seeder
{
    public function run()
    {
        Color::create(['color' => 'red']);
        Color::create(['color' => 'blue']);
        Color::create(['color' => 'green']);
    }
}

