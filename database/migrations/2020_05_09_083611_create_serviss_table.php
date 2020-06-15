<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServissTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serviss', function (Blueprint $table) {
            $table->bigIncrements('servis_id');
            $table->unsignedBigInteger('table_id')->nullable();
            $table->foreign('table_id')->references('table_id')->on('pesakits')->onDelete('cascade');
            $table->unsignedBigInteger('penyakit_id')->nullable();
            $table->foreign('penyakit_id')->references('penyakit_id')->on('jenis_penyakits')->onDelete('cascade');
            $table->unsignedBigInteger('makmal_id')->nullable();
            $table->foreign('makmal_id')->references('makmal_id')->on('makmals')->onDelete('cascade');
            $table->unsignedBigInteger('cuti_id')->nullable();
            $table->foreign('cuti_id')->references('cuti_id')->on('cuti_sakits')->onDelete('cascade');
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
        Schema::dropIfExists('serviss');
    }
}
