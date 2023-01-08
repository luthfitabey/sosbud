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
        Schema::create('kegiatan-tematik', function (Blueprint $table) {
            $table->id('id_kegiatan_tematik')->required();
            $table->unsignedBigInteger('id_sub_bidang')->required();
            $table->foreign('id_sub_bidang')->references('id_sub_bidang')->on('sub-bidang');
            $table->string('nama_kegiatan_tematik', 100)->required();
            $table->string('desk_kegiatan_tematik', 100)->nullable();
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
        Schema::dropIfExists('kegiatan-tematik');
    }
};
