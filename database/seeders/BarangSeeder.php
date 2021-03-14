<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'Id_Barang' => '1',
        	    'nama_barang' => 'Laptop',
        	    'jenis_barang' => 'Elektronik',
                'tanggal_pengiriman' => '2020-03-12 13-00-02',
                'alamat_pengiriman' => 'kintamani-Bangli-bali'
            ],
            [
                'Id_Barang' => '2',
        	    'nama_barang' => 'Laptop',
        	    'jenis_barang' => 'Elektronik',
                'tanggal_pengiriman' => '2020-03-22 13-00-31',
                'alamat_pengiriman' => 'kintamani-kuta-bali'
            ],
            [
                'Id_Barang' => '3',
        	    'nama_barang' => 'LCD 12"',
        	    'jenis_barang' => 'Elektronik',
                'tanggal_pengiriman' => '2020-03-23 13-00-01',
                'alamat_pengiriman' => 'kintamani-Bangli-bali'
            ],
        ];
        DB::table('barangs')->insert($data);
    }
};