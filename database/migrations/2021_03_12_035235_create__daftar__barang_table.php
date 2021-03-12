<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateDaftarBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_daftar__barang', function (Blueprint $table) {
            $table->increments('Id_Barang');
            $table->String('nama_barang',100);
            $table->String('jenis_barang',100);
            $table->dateTime('tanggal_pengiriman');
            $table->text('alamat_pengiriman');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_daftar__barang');
    }
}
