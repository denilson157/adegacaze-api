<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusOrderSeeder extends Seeder
{
    public function run()
    {
        $status = [
            'Pedido realizado',
            'Saiu para entrega',
            'Finalizado'
        ];

        foreach ($status as $statu) {
            DB::table('order_status')->insert([
                'name' => $statu
            ]);
        }
    }
}
