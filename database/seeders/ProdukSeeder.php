<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use App\Models\produk;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            produk::insert([
            [
            'name' => 'gitar yamaha',
            'category_id' => 2,
            'harga' => 2000000,
            'stok' => 10,
            ]
        ]);
    
    }
}
