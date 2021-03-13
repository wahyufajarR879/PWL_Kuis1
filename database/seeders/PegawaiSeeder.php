<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_daftar__pegawai')->insert([
        	'Id_pegawai' => '1',
        	'nama_pegawai' => 'Wahyu',
        	'Tempat_tgl_lahir' => 'Denpasar, 31-10-01',
            'no_tlpn' => '082247477770',
            'alamat_pegawai' => 'kintamani-Bangli-bali'
        ]);DB::table('_daftar__pegawai')->insert([
        	'Id_pegawai' => '2',
        	'nama_pegawai' => 'Reza',
        	'Tempat_tgl_lahir' => 'Lumajang, 18-02-01',
            'no_tlpn' => '0895332766986',
            'alamat_pegawai' => 'Tanggul-Jember-Jatim'
        ]);
    }
}
