<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('obat')->insert([
            'id' => '001',
            'nama_barang' => 'Paramex',
            'harga' => '2000',
            'satuan' => 'Pcs',
            'stok' => '10',
        ]);

        DB::table('obat')->insert([
            'id' => '002',
            'nama_barang' => 'Bodrex',
            'harga' => '2500',
            'satuan' => 'Pcs',
            'stok' => '5',
        ]);

        DB::table('obat')->insert([
            'id' => '003',
            'nama_barang' => 'Hufagrip',
            'harga' => '5000',
            'satuan' => 'Botol',
            'stok' => '20',
        ]);
    }
}
