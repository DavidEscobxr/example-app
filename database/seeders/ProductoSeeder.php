<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductosTableSeeder extends Seeder
{
    public function run()
    {
        
        Producto::factory()->count(75)->create();
    }
}