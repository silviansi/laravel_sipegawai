<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pegawai = [
            [
                'nama' => 'Saiful Gunarto',
                'no_telp' => '081883736342',
                'email' => 'saiful@gmail.com',
                'tgl_lahir' => '1990-01-01',
                'tgl_masuk_kerja' => '2021-01-01',
                'alamat' => 'Jl. Raya No. 1',
                'jenis_kelamin' => 'Laki-laki',
                'bagian_id' => 1,
                'jabatan_id' => 1,
                'status_id' => 1,
            ],
            [
                'nama' => 'Musofa Suwarno',
                'no_telp' => '081736466736',
                'email' => 'mustofa@gmail.com',
                'tgl_lahir' => '1991-02-02',
                'tgl_masuk_kerja' => '2021-01-02',
                'alamat' => 'Jl. Raya No. 2',
                'jenis_kelamin' => 'Laki-laki',
                'bagian_id' => 2,
                'jabatan_id' => 2,
                'status_id' => 2,
            ],
            [
                'nama' => 'Eko Ardiansyah',
                'no_telp' => '082655837465',
                'email' => 'eko@gmail.com',
                'tgl_lahir' => '1991-03-03',
                'tgl_masuk_kerja' => '2021-01-02',
                'alamat' => 'Jl. Raya No. 3',
                'jenis_kelamin' => 'Laki-laki',
                'bagian_id' => 3,
                'jabatan_id' => 3,
                'status_id' => 3,
            ],
            [
                'nama' => 'Wirda Suartini',
                'no_telp' => '083745817623',
                'email' => 'wirda@gmail.com',
                'tgl_lahir' => '1992-04-04',
                'tgl_masuk_kerja' => '2021-01-02',
                'alamat' => 'Jl. Raya No. 4',
                'jenis_kelamin' => 'Perempuan',
                'bagian_id' => 4,
                'jabatan_id' => 4,
                'status_id' => 1,
            ],
            [
                'nama' => 'Irma Hariani',
                'no_telp' => '081536226736',
                'email' => 'irma@gmail.com',
                'tgl_lahir' => '1992-05-05',
                'tgl_masuk_kerja' => '2021-01-02',
                'alamat' => 'Jl. Raya No. 5',
                'jenis_kelamin' => 'Perempuan',
                'bagian_id' => 5,
                'jabatan_id' => 5,
                'status_id' => 1,
            ],
        ];

        foreach ($pegawai as $p) {
            Pegawai::create($p);
        }
    }
}
