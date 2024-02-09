<?php

use Illuminate\Database\Seeder;
use App\Models\Type;

class TypesTableSeeder extends Seeder
{
    public function run()
    {
        Type::create(['type' => 'kombi']);
        Type::create(['type' => 'cabriolet']);
        Type::create(['type' => 'sedan']);
    }
}

