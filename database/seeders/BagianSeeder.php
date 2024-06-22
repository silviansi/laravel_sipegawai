<?php

namespace Database\Seeders;

use App\Models\Bagian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BagianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bagians = [
            'Keuangan',
            'SDM',
            'IT',
            'Pemasaran',
            'Produksi',
            'Logistik',
            'Pelayanan',
            'Keamanan',
            'Kualitas',
        ];

        foreach ($bagians as $bagian) {
            Bagian::create([
                'nama_bagian' => $bagian,
            ]);
        }
    }
}
