<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
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
            'Id_pelanggan' => '1',
        	'nama_pelanggan' => 'Ageng',
            'alamat_pelanggan' => 'malang'
        ],
        [
            'Id_pelanggan' => '2',
        	'nama_pelanggan' => 'Mulan',
            'alamat_pelanggan' => 'malang'
        ],
        [
            'Id_pelanggan' => '3',
        	'nama_pelanggan' => 'Mila',
            'alamat_pelanggan' => 'malang'
        ],
    ];
    DB::table('pelanggans')->insert($data);
    }
};
