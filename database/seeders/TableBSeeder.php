<?php

namespace Database\Seeders;

use App\Models\TableB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TableBSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kode_toko' => 1,
                'nominal_transaksi' => 1000
            ],
            [
                'kode_toko' => 2,
                'nominal_transaksi' => 1000
            ],
            [
                'kode_toko' => 4,
                'nominal_transaksi' => 1000
            ],
            [
                'kode_toko' => 6,
                'nominal_transaksi' => 1000
            ],
            [
                'kode_toko' => 7,
                'nominal_transaksi' => 1000
            ],
        ];

        foreach ($data as $value) {
            TableB::factory()->create($value);
        }
    }
}
