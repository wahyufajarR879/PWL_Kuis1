<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_daftar_supplier')->insert([
        	'Id_supplier' => '101',
        	'nama_supplier' => 'PWL',
            'no_telpn' => '061248',
            'alamat_supplier' => 'banyuwangi'

        ]);
    }
}
