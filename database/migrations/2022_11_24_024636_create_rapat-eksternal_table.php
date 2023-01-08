<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rapat-eksternal', function (Blueprint $table) {
            $table->id('rapat_eksternal');
            $table->unsignedBigInteger('id_kegiatan_tematik')->required();
            $table->foreign('id_kegiatan_tematik')->references('id_kegiatan_tematik')->on('kegiatan-tematik');
            $table->unsignedBigInteger('id_user')->required();
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->string('nama_rapat_eksternal', 250)->required();
            $table->string('nomor_surat', 100);
            $table->date('tanggal_surat');
            $table->string('scan_undangan', 100);
            $table->string('penyelenggara', 100);
            $table->string('dokumentasi', 100);
            $table->string('laporan', 100);
            $table->string('materi', 100);
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
        Schema::dropIfExists('rapat-eksternal');
    }
};
