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
        Schema::create('sub-bidang', function (Blueprint $table) {
            $table->id('id_sub_bidang')->required();
            $table->unsignedBigInteger('id_bidang')->required();
            $table->foreign('id_bidang')->references('id_bidang')->on('bidang');
            $table->string('nama_sub_bidang', 100)->required();
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
        Schema::dropIfExists('sub-bidang');
    }
};
