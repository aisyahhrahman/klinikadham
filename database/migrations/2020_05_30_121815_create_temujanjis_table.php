<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemujanjisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temujanjis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kad_pengenalan')->nullable();
            $table->string('keterangan')->nullable();
            $table->time('masa', 0)->nullable();
            $table->date('tarikh', 0)->nullable();
            $table->unsignedBigInteger('table_id')->nullable();
            $table->foreign('table_id')->references('table_id')->on('pesakits')->onDelete('cascade');
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
        Schema::dropIfExists('temujanjis');
    }
}
