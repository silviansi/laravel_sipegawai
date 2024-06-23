<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jabatans = [
            'Manajer',
            'Supervisor',
            'Kepala Bagian',
            'Staff',
            'Operator',
            'Pekerja',
        ];

        foreach ($jabatans as $jabatan) {
            Jabatan::create([
                'nama_jabatan' => $jabatan,
            ]);
        }
    }
}
