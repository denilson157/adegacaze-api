<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    
    public function run()
    {
        $brands = [
            'Skol',
            'Brahma',
            'Bohemia',
            'Itaipava',
            'Heineken',
            'Colorado',

            'Coca-cola',
            'Pepsico',
            'Guaraná Antártica',
            'Itubaina',
            
            'Jack Daniels',
            'Johnnie Walker',
            
            'Pérgola',
            'Santomé',
            'Santa Helena',
            'Cantinho do Vale',
            
            'Sminorff',
            'Askov',
            'Absolut',
            'Corote',
            'Gordons',

            '51',
            'Ypióca',
            'Velho Barreiro',
            'Cabaré',
            'Monster',
            'Red Bull',
        ];

        foreach ($brands as $brand) {
            Brand::create(['name' => $brand]);
        }
    }
}
