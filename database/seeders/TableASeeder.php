<?php

namespace Database\Seeders;

use App\Models\TableA;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TableASeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kode_toko_baru' => 1,
                'kode_toko_lama' => 6
            ],
            [
                'kode_toko_baru' => 2,
                'kode_toko_lama' => null
            ],
            [
                'kode_toko_baru' => 3,
                'kode_toko_lama' => 7
            ],
            [
                'kode_toko_baru' => 4,
                'kode_toko_lama' => 9
            ],
            [
                'kode_toko_baru' => 5,
                'kode_toko_lama' => 8
            ],
        ];

        foreach ($data as $value) {
            TableA::factory()->create($value);
        }
    }
}
