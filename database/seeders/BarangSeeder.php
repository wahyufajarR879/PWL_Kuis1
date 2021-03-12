<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_daftar_barang')->insert([
        	'Id_Barang' => '1',
        	'Nama_Barang' => 'Laptop',
        	'Jenis_Barang' => 'Elektronik',
            'Tanggal_Pengiriman' => '2020-03-12 13-00-02',
            'Alamat_Pengiriman' => 'kintamani-Bangli-bali'

        ]);
    }
}
