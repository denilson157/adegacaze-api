<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    
    public function run()
    {
        $categories = [
            'Cerveja',
            'Vinho',
            'Destilados',
            'Cachaça',
            'Whisky',
            'Energético',
            'Não Alcoólicos',
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
