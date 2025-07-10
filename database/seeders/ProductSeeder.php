<?php

namespace Database\Seeders;

use App\Models\ProductModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductModel::insert([
            ['name' => 'product 1', 'description' => 'Deskripsi produk 1', 'photo' => 'https://via.placeholder.com/150'],
            ['name' => 'product 2', 'description' => 'Deskripsi produk 2', 'photo' => 'https://via.placeholder.com/150'],
            ['name' => 'product 3', 'description' => 'Deskripsi produk 3', 'photo' => 'https://via.placeholder.com/150'],
            ['name' => 'product 4', 'description' => 'Deskripsi produk 4', 'photo' => 'https://via.placeholder.com/150'],
        ]);
    }
}
