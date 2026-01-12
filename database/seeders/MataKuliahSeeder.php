<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MataKuliah;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MataKuliah::insert([
            [
                'kode' => 'CS101',
                'nama' => 'Pengantar Ilmu Komputer',
                'sks' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'CS102',
                'nama' => 'Struktur Data',
                'sks' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'CS103',
                'nama' => 'Basis Data',
                'sks' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
