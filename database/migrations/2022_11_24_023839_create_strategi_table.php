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
        Schema::create('strategi', function (Blueprint $table) {
            $table->id('id_strategi')->required();
            $table->unsignedBigInteger('id_sasaran')->required();
            $table->foreign('id_sasaran')->references('id_sasaran')->on('sasaran');
            $table->string('deskripsi_strategi', 250)->required();
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
        Schema::dropIfExists('strategi');
    }
};
