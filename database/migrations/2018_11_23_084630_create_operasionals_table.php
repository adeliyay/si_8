<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperasionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operasionals', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('id_operasional')->unsigned();
            $table->integer('user_id');
            $table->string('deskripsi_operasional'); //per barang
            $table->integer('biaya_operasional'); //per barang
            $table->integer('total_biaya'); //harian
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
        Schema::dropIfExists('operasionals');
    }
}
