<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembelianUbatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelian_ubats', function (Blueprint $table) {
            $table->bigIncrements('pembelian_id');
            $table->integer('pesakit_id')->nullable();
            $table->string('description')->nullable();
            $table->string('kuantiti_pembelian')->nullable();
            $table->string('ubat')->nullable();
            $table->string('tarikh')->nullable();
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
        Schema::dropIfExists('pembelian_ubats');
    }
}
