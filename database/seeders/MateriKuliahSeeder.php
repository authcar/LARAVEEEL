<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\MateriKuliah;

class MateriKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MateriKuliah::insert([
            [
                'kelas_id' => 10,
                'judul' => 'Pengantar Ilmu Komputer - Materi 1',
                'deskripsi' => 'Dasar-dasar ilmu komputer dan sejarahnya.',
            ],
            [
                'kelas_id' => 11,
                'judul' => 'Struktur Data - Materi 1',
                'deskripsi' => 'Pengenalan struktur data dasar seperti array dan linked list.',
            ],
            [
                'kelas_id' => 12,
                'judul' => 'Basis Data - Materi 1',
                'deskripsi' => 'Konsep dasar basis data dan model relasional.',
            ]
        ]);
    }
}
