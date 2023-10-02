<?php

namespace Database\Seeders;

use App\Models\TableC;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TableCSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kode_toko' => 1,
                'area_sales' => 'A'
            ],
            [
                'kode_toko' => 2,
                'area_sales' => 'A'
            ],
            [
                'kode_toko' => 3,
                'area_sales' => 'A'
            ],
            [
                'kode_toko' => 4,
                'area_sales' => 'B'
            ],
            [
                'kode_toko' => 5,
                'area_sales' => 'B'
            ],
        ];

        foreach ($data as $value) {
            TableC::factory()->create($value);
        }
    }
}
