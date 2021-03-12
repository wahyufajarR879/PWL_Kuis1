<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateDaftarPelangganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_daftar__pelanggan', function (Blueprint $table) {
            $table->increments('Id_pelanggan');
            $table->String('nama_pelanggan',100);
            $table->text('alamat_pelanggan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_daftar__pelanggan');
    }
}
