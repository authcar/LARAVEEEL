<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mahasiswa::insert([
            [
                'nama' => 'Andi Saputra',
                'nim' => '2021001',
                'angkatan' => '2021',
            ],
            [
                'nama' => 'Budi Santoso',
                'nim' => '2021002',
                'angkatan' => '2021',
            ],
            [
                'nama' => 'Citra Dewi',
                'nim' => '2021003',
                'angkatan' => '2021',
            ]
        ]);
    }
}
