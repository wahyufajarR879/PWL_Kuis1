<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_daftar_pelanggan')->insert([
        	'Id_pelanggan' => '1',
        	'nama_pelanggan' => 'reza',
        	'Tempat, Tanggal_lahir' => 'malang, 10-11-01',
            'no_telpn' => '087862258181',
            'alamat_pelanggan' => 'malang'

        ]);
    }
}
