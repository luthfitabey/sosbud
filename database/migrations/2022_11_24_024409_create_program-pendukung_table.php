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
        Schema::create('program-pendukung', function (Blueprint $table) {
            $table->id('id_program_pendukung')->required();
            $table->unsignedBigInteger('id_kegiatan_tematik')->required();
            $table->foreign('id_kegiatan_tematik')->references('id_kegiatan_tematik')->on('kegiatan-tematik');
            $table->unsignedBigInteger('id_strategi')->required();
            $table->foreign('id_strategi')->references('id_strategi')->on('strategi');
            $table->unsignedBigInteger('id_user')->required();
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->string('nama_program_pendukung', 250)->required();
            $table->string('kode_rekening', 100);
            $table->string('sub_kegiatan', 250);
            $table->string('indikator', 250);
            $table->string('target', 100);
            $table->string('pagu_dalam_APBD', 100);
            $table->string('pagu_dalam_P-APBD', 100);
            $table->string('OPD_penanggungjawab', 100);
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
        Schema::dropIfExists('program-pendukung');
    }
};
