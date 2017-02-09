<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemesananTempatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan_tempat', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tempat_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('waktu_mulai');
            $table->string('waktu_selesai');
            $table->date('tanggal');
            $table->string('konfirmasi');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('tempat_id')->references('id')->on('tempat')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanan_tempats');
    }
}
