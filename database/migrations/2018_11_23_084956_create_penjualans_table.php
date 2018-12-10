<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualans', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('id_penjualan')->unsigned();
            $table->unsignedInteger('id_barang');
            $table->integer('user_id');
            $table->string('nama_konsumen');
            $table->string('deskripsi_penjualan');
            $table->integer('terjual');
            $table->foreign('id_barang')
                ->references('id')->on('barangs')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualans');
    }
}
