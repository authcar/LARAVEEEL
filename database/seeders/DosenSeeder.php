<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Dosen;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dosen::insert([
            [
                'nama' => 'Hans Pramudya',
                'email' => 'hans.pramudya@example.com',
                'password' => bcrypt('password123'),
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'nama' => 'Rafifa Maulana',
                'email' => 'rafifa.maulana@example.com',
                'password' => bcrypt('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
