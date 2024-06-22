<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            'Aktif',
            'Tidak Aktif',
            'Cuti',
            'Resign',
            'Pensiun',
        ];

        foreach ($statuses as $status) {
            Status::create([
                'nama_status' => $status,
            ]);
        }
    }
}
