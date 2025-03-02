<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kategori_kode' => 'SMK', 'kategori_nama' => 'Snack/Makanan Ringan'],
            ['kategori_kode' => 'MNM', 'kategori_nama' => 'Minuman'],
            ['kategori_kode' => 'SAY', 'kategori_nama' => 'Sayuran'],
            ['kategori_kode' => 'BUA', 'kategori_nama' => 'Buah'],
        ];

        foreach ($data as $row) {
            DB::table('m_kategori')->insert($row);
        }
    }
}
