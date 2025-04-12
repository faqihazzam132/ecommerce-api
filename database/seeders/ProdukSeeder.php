<?php

namespace Database\Seeders;

use App\Models\produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 10; $i++) {
            produk::create([
                'nama_produk' => $faker->word,
                'harga_produk' => $faker->numberBetween(10000, 100000),
                'stok_produk' => $faker->numberBetween(1, 100),
                'deskripsi_produk' => $faker->sentence,
                'gambar_produk' => $faker->imageUrl(640, 480, 'buku', true),
            ]);
        }
    }
}