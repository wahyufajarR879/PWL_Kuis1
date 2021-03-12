<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_daftar_pegawai')->insert([
        	'Id_pegawai' => '1',
        	'nama_pegawai' => 'Wahyu',
        	'Tempat, Tanggal_lahir' => 'Denpasar, 31-10-01',
            'no_telpn' => '082247477770',
            'alamat_pegawai' => 'kintamani-Bangli-bali'

        ]);
    }
}
