<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateDaftarPegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_daftar__pegawai', function (Blueprint $table) {
            $table->increments('Id_pegawai');
            $table->String('nama_pegawai', 100);
            $table->char('Tempat_tgl_lahir', 200);
            $table->char('no_tlpn', 50);
            $table->text('alamat_pegawai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_daftar__pegawai');
    }
}
