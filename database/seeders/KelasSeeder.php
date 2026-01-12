<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Kelas;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelas::insert([
            [
                'dosen_id' => '1',
                'mata_kuliah_id' => '1',
                'hari' => 'Senin',
                'jam_mulai' => '09:00:00',
                'jam_selesai' => '11:30:00',
            ],
            [
                'dosen_id' => '2',
                'mata_kuliah_id' => '2',
                'hari' => 'Rabu',
                'jam_mulai' => '13:00:00',
                'jam_selesai' => '15:30:00',
            ],
            [
                'dosen_id' => '1',
                'mata_kuliah_id' => '3',
                'hari' => 'Jumat',
                'jam_mulai' => '10:00:00',
                'jam_selesai' => '12:30:00',
            ]
        ]);
    }
}
