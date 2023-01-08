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
        Schema::create('surat', function (Blueprint $table) {
            $table->id('id_surat')->required();
            $table->string('nomor_surat')->required();
            $table->string('perihal')->required();
            $table->date('tanggal')->nullable();
            $table->string('tl')->required();
            $table->string('keterangan')->nullable();
            $table->unsignedBigInteger('id_user')->required();
            $table->unsignedBigInteger('id_jenis_surat')->required();
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->foreign('id_jenis_surat')->references('id_jenis_surat')->on('jenis-surat');
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
        //
    }
};
