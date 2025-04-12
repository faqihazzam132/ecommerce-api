<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pustaka extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pustakas')->insert([
            [
                'nama_pustaka' => 'Pustaka 1',
                'stok_pustaka' => 10,
                'deskripsi_pustaka' => 'Deskripsi Pustaka 1',
                'gambar_pustaka' => 'gambar1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pustaka' => 'Pustaka 2',
                'stok_pustaka' => 15,
                'deskripsi_pustaka' => 'Deskripsi Pustaka 2',
                'gambar_pustaka' => 'gambar2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}