<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateDaftarSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_daftar__supplier', function (Blueprint $table) {
            $table->increments('Id_suplier');
            $table->String('nama_supplier',100);
            $table->char('no_tlpn',50);
            $table->text('alamat_supplier');
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_daftar__supplier');
    }
}
