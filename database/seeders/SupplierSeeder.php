<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_daftar__supplier')->insert([
        	'Id_suplier' => '101',
        	'nama_supplier' => 'PWL',
            'no_tlpn' => '061248',
            'alamat_supplier' => 'banyuwangi'

        ]);
    }
}
