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
        Schema::create('dasar-hukum', function (Blueprint $table) {
            $table->id('id_dasar_hukum')->required();;
            $table->unsignedBigInteger('id_kegiatan_tematik')->required();
            $table->foreign('id_kegiatan_tematik')->references('id_kegiatan_tematik')->on('kegiatan-tematik');
            $table->unsignedBigInteger('id_user')->required();
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->string('no_regulasi', 100);
            $table->year('tahun');
            $table->string('perihal', 250);
            $table->string('scan_dasar_hukum', 100);
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
        Schema::dropIfExists('dasar-hukum');
    }
};
