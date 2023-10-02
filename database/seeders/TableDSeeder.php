<?php

namespace Database\Seeders;

use App\Models\TableD;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TableDSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kode_sales' => 'A1',
                'nama_sales' => 'Alpha'
            ],
            [
                'kode_sales' => 'A2',
                'nama_sales' => 'Blue'
            ],
            [
                'kode_sales' => 'A3',
                'nama_sales' => 'Charlie'
            ],
            [
                'kode_sales' => 'B1',
                'nama_sales' => 'Delta'
            ],
            [
                'kode_sales' => 'B2',
                'nama_sales' => 'Echo'
            ],
        ];

        foreach ($data as $value) {
            TableD::factory()->create($value);
        }
    }
}
